/**
 * Inicialização segura do Livewire e Alpine.js
 * com proteção reforçada contra múltiplas instâncias
 */
(function() {
    // Controle global de inicialização
    if (window.__livewireAlpineInitialized) {
        console.debug('[Init] Já inicializado - abortando');
        return;
    }
    window.__livewireAlpineInitialized = true;

    // Flag para verificar se os plugins foram carregados
    const loadedPlugins = new Set();

    // Função para carregar módulos com tratamento robusto de erros
    const safeImport = async (path) => {
        try {
            const module = await import(path);
            return module?.default || module;
        } catch (error) {
            console.error(`[Init] Erro ao carregar ${path}:`, error);
            return null;
        }
    };

    // Função para registrar plugins com verificação tripla
    const registerPlugin = (Alpine, plugin, name) => {
        const propName = `$${name}`;
        
        // 1. Verifica se já existe no Alpine
        if (Alpine[propName]) return false;
        
        // 2. Verifica se já foi registrado
        if (loadedPlugins.has(name)) return false;
        
        // 3. Registra o plugin
        Object.defineProperty(Alpine, propName, {
            value: plugin,
            configurable: false,
            writable: false,
            enumerable: true
        });
        
        Alpine.plugin(plugin);
        loadedPlugins.add(name);
        return true;
    };

    // Inicialização principal
    const initialize = async () => {
        console.debug('[Init] Iniciando carregamento...');
        
        // 1. Carrega Livewire + Alpine
        const LivewireAlpine = await safeImport('../../vendor/livewire/livewire/dist/livewire.esm');
        if (!LivewireAlpine) {
            console.error('[Init] Falha ao carregar Livewire/Alpine');
            return;
        }

        const { Livewire, Alpine } = LivewireAlpine;

        // 2. Verificação definitiva contra duplicação
        if (window.Alpine || window.Livewire) {
            console.warn('[Init] Alpine ou Livewire já inicializados globalmente');
            return;
        }

        // 3. Configura Alpine globalmente
        window.Alpine = Alpine;
        console.debug('[Init] Alpine configurado');

        // 4. Carrega e registra plugins
        const pluginsToLoad = [
            { path: '@alpinejs/persist', name: 'persist' },
            { path: '@ryangjchandler/alpine-clipboard', name: 'clipboard' }
        ];

        for (const { path, name } of pluginsToLoad) {
            const plugin = await safeImport(path);
            if (plugin) {
                const success = registerPlugin(Alpine, plugin, name);
                console.debug(`[Init] Plugin ${name} ${success ? 'registrado' : 'já existia'}`);
            }
        }

        // 5. Inicia Livewire
        Livewire.start();
        window.Livewire = Livewire;
        console.debug('[Init] Livewire inicializado com sucesso');
    };

    // Dispara a inicialização
    initialize();
})();

import './bootstrap';
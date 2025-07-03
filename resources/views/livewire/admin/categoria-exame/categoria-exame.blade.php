<div>
    <form wire:submit.prevent="saved">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend text-lg">Nova Categoria de um Exame</legend>

            <x-form.input label="Nome" name="name" />
            <x-form.textarea label="Descrição" name="description" />
            <x-form.input label="Icone" name="icon" />
            <x-form.input label="Sequência" name="sequence_order" type="number" />

            <div class="flex justify-end h-12 gap-4">
                <button type="button" wire:click="closeDrawer" class="btn">
                    Cancelar
                </button>
                <button type="submit" class="btn bg-complementar-agua uppercase">
                    Cadastrar
                </button>
            </div>
        </fieldset>
    </form>

    <div class="mt-4 bg-base-200 p-4">
        <x-form.input placeholder="Buscar categorias..."  label="Buscar categorias" name="search" wire:model.live.debounce.300ms="search" />
    </div>

    <ul class="list bg-base-200 rounded-box shadow-md mt-4">

        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Listagem de todas categorias cadastradas</li>


        @foreach ($this->categorias as $categoria)
        <li class="list-row">
            <div>
                <div>{{ $categoria->name }}</div>
                <div class="text-xs uppercase font-semibold opacity-60">{{$categoria->created_at}}</div>
            </div>
            
            <p class="list-col-wrap text-sm text-justify">
               {{ $categoria->description }}
            </p>
            
            <!-- <button class="btn btn-square btn-ghost">
               Editar
            </button> -->

        </li>
        @endforeach
    </ul>
    <div class="mt-4">{{$this->categorias->links()}}</div>


</div>
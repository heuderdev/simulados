<div>
    <div class="my-4 flex gap-2 text-2xl uppercase text-neutro-claro font-bold">

        <x-svg class="w-8 h-8 fill-current text-analoga-rosa-claro" nome="arrow" />

        <div>Painel Administrativo <span class="text-analoga-rosa-claro">(</span><span class="border-b-2 border-analoga-rosa-claro">CRUD MENU</span><span class="text-analoga-rosa-claro">)</span>.</div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
        @foreach ($menus as  $menu)
            <x-painel.action-card link="{{$menu['link']}}" text="{{$menu['text']}}" icon="{{$menu['icon']}}" />
        @endforeach
    </div>
</div>
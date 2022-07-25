<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <div>
        <button type="button" class="btn btn-success position-absolute end-0 rigth-2 ">Novo</button>
    </div>
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Designer Gráfico
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> 
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Análise e Desenvolvimento de Sistemas
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> 
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Arquitetura
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div>
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        DevOps
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> 
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Sistemas de Informação 
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> 
    <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Técnico em Informática
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> <div class="py-6 " > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white card sm:rounded-lg">
                <x-nav-link :href="route('description')" :active="request()->routeIs('description')">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                        Enfermagem
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div> 
    
    
</x-app-layout>

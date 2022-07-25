<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    
    <!-- Modal Cadastro -->

    <div class="botao-novo">
        
    <button type="button" class="btn btn-success  end-0 rigth-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Novo Curso</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Curso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nome do Curso:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Descrição do Curso:</label>
                <textarea class="form-control" id="message-text"></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
            <button type="button" class="btn btn-primary">Cadastrar curso</button>
        </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end Modal -->

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
    <!-- code -->
    <script>$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    })
    </script>
    
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Lista de todos os usuários <br><br>
                    @if(isset($users) && count($users))
                    <table cellpadding="15">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Logradouro</th>
                                <th>Número</th>
                                <th>CEP</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @foreach($user->address as $endereco)
                                        <td>{{ $endereco->logradouro }}</td>
                                        <td>{{ $endereco->numero }}</td>
                                        <td>{{ $endereco->cep }}</td>
                                        <td>{{ $endereco->bairro }}</td>
                                        <td>{{ $endereco->cidade }}</td>
                                        <td>{{ $endereco->estado }}</td>
                                    @endforeach
                                    <td>
                                        @if($userId == $user->id)
                                            <a href="/profile">Editar</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>Nenhum usuário cadastrado.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

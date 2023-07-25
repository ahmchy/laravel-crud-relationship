@extends('app')
@section('content')
    <div class="my-2 rounded-xl border-2 p-2 flex justify-between items-center	">
        <p>Want to add new user data?</p>
        <a href={{ 'create' }} type="button"
            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Add</a>

    </div>

    <form>
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="search" value=""
                class="block w-full my-3 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search">
        </div>
    </form>

    @if (Session::has('msg'))
        <p class="my-5 font-bold text-green-700">{{ Session::get('msg') }}</p>
    @endif

    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class=" text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Team
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $key => $player)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $player->id }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $player->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $player->gender }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->city }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->teams->name }}
                        </td>

                        <td class="px-6 py-4">
                            <a  href="{{ url('/'.$player->id.'/update')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button
                                    type="submit"
                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Update</button></a>
  
                                    
                                    
                                    <form action="{{ url('/'.$player->id.'/delete')}}" method="POST" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                       
                                    Delete
                                </button>
                                </form>
                        </td>
                @endforeach
                </tr>

            </tbody>
        </table>
    </div> --}}


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-data w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="px-6 py-3">
                        ID
                    </th> --}}
                    <th class="w-1/3 px-6 py-3">
                        Post Category
                    </th>
                    <th class="px-6 py-3">
                        Post Title
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Team
                    </th> --}}

                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($teams as $key => $team)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $team->name }}
                        </th>
                        <td class="px-6 py-4">
                            @foreach ($team->playerWithTeam as $players)
                            {{$players->name}}
                            @endforeach
                        </td>



                @endforeach
                </tr>

            </tbody> --}}
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $category->name }}
                        </th>
                        <td class="px-6 py-4">
                            @foreach ($category->post as $singlePost)
                                {{ $singlePost->name }}
                            @endforeach
                        </td>
                @endforeach
                </tr>

            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $('#search').on('keyup', function(e) {
            e.preventDefault();
            let data = $('#search').val();
            console.log(data)
            $.ajax({
                url: "{{ route('search') }}",
                method: "GET",
                data: {
                    data: data
                },
                success: function(result) {
                    $(".able-data").html(result);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    

                    console.log(xhr);
                }
            });
        });
    </script>
@endpush

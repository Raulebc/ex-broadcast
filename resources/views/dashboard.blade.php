<x-app-layout>
    <main class="flex h-full items-center justify-center p-4">
        <div class="flex flex-row border border-gray-300 h-full w-8/12 bg-white">
            <div class="flex flex-col w-2/5 border-r">
                <div class="border-b h-16 flex justify-center items-center">
                    Raul Berrios
                </div>
                <div class="h-full">
                    <div class="hover:bg-blue-100 hover:bg-opacity-50">
                        <div class="flex flex-row justify-between items-center py-2 px-4">
                            <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&_nc_ohc=mlbR7Vla5QUAX-JPXU7&tp=1&oh=1f9c99e5957f5af0bd8d415a4f8bf96b&oe=601913F6" 
                                    class="ml-2 w-14 h-14 rounded-full border border-gray-400">
                            <div class="w-10/12 ml-3 flex flex-col">
                                <p>Raul Berrios</p>
                                <p class="text-sm text-gray-400">Hace 15 horas</p>
                            </div>
                        </div>
                    </div>
                    <div class="hover:bg-blue-100 hover:bg-opacity-50">
                        <div class="flex flex-row justify-between items-center py-2 px-4">
                            <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&_nc_ohc=mlbR7Vla5QUAX-JPXU7&tp=1&oh=1f9c99e5957f5af0bd8d415a4f8bf96b&oe=601913F6" 
                                    class="ml-2 w-14 h-14 rounded-full border border-gray-400">
                            <div class="w-10/12 ml-3 flex flex-col">
                                <p>Raul Berrios</p>
                                <p class="text-sm text-gray-400">Hace 15 horas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-3/5 h-full">
                <div class="flex h-16 items-center justify-center w-full border-b">
                    <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&amp;_nc_ohc=mlbR7Vla5QUAX-JPXU7&amp;tp=1&amp;oh=1f9c99e5957f5af0bd8d415a4f8bf96b&amp;oe=601913F6" 
                            class="ml-2 w-6 h-6 rounded-full border border-gray-400">
                    <div class="flex flex-col ml-3 w-10/12">
                        <p class="font-bold leading-4 text-lg">Raul Berrios</p>
                        <p class="text-gray-400 text-xs">Activo hace 2 horas</p>
                    </div>
                </div>
                <div class="flex flex-col h-full items-end justify-end w-full">
                    <chat-component></chat-component>
                                        
                    <div class="flex h-20 items-center justify-center w-full">
                        <div class="border flex h-3/6 justify-center rounded-full w-11/12">
                            <div class="w-11/12 justify-start">
                                <textarea class="appearance-none border-none resize-none w-full" style="margin-top: 0px; margin-bottom: 0px; height: 36px;" placeholder="Escribe un mensaje..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- <div class="flex flex-row justify-center p-5">
        <div class="w-4/6 flex flex-row justify-between">
            <div class="border border-black w-2/5">
                <div class="border-b h-16 flex justify-center items-center">
                    Raul Berrios
                </div>

                <div class="hover:bg-blue-100 hover:bg-opacity-50">
                    <div class="flex flex-row justify-between items-center py-2 px-4">
                        <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&_nc_ohc=mlbR7Vla5QUAX-JPXU7&tp=1&oh=1f9c99e5957f5af0bd8d415a4f8bf96b&oe=601913F6" 
                                class="ml-2 w-14 h-14 rounded-full border border-gray-400">
                        <div class="w-10/12 ml-3 flex flex-col">
                            <p>Raul Berrios</p>
                            <p class="text-sm text-gray-400">Hace 15 horas</p>
                        </div>
                    </div>
                </div>
                <div class="hover:bg-blue-100 hover:bg-opacity-50">
                    <div class="flex flex-row justify-between items-center py-2 px-4">
                        <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&_nc_ohc=mlbR7Vla5QUAX-JPXU7&tp=1&oh=1f9c99e5957f5af0bd8d415a4f8bf96b&oe=601913F6" 
                                class="ml-2 w-14 h-14 rounded-full border border-gray-400">
                        <div class="w-10/12 ml-3 flex flex-col">
                            <p>Raul Berrios</p>
                            <p class="text-sm text-gray-400">Hace 15 horas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-black border-blue-200 flex flex-col w-3/5">
                <div class="flex border border-black items-center h-16 justify-center w-full">
                    <img src="https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&amp;_nc_ohc=mlbR7Vla5QUAX-JPXU7&amp;tp=1&amp;oh=1f9c99e5957f5af0bd8d415a4f8bf96b&amp;oe=601913F6" class="ml-2 w-6 h-6 rounded-full border border-gray-400">
                    <div class="flex flex-col ml-3 mt-1 w-10/12">
                        <p class="font-bold leading-4 text-lg">Raul Berrios</p>
                        <p class="text-gray-400 text-xs">Activo hace 2 horas</p>
                    </div>
                </div>
                <div class="border border-black flex flex-col h-full items-end justify-end w-full">
                    <div class="flex justify-center overflow-auto h-full w-full">
                        <div class="flex flex-col items-center w-full gap-2">
                            <x-participant-text-box></x-participant-text-box>
                            <x-self-text-box></x-self-text-box>
                            <x-participant-text-box></x-participant-text-box>
                            <x-self-text-box></x-self-text-box>
                        </div>
                    </div>
                                        
                    <div class="flex h-20 items-center justify-center w-full">
                        <div class="border border-gray-300 flex h-3/6 justify-center rounded-full w-11/12">
                            <div class="w-11/12 justify-start">
                                <textarea class="appearance-none border-none resize-none w-full" style="margin-top: 0px; margin-bottom: 0px; height: 36px;" placeholder="Escribe un mensaje..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>

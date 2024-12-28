<x-layout></x-layout>
<x-navbar></x-navbar>
<x-body>
    <div class="flex justify-center items-center">
        <div class="bg-slate-400 mt-2 rounded-lg w-[600px]">
            <div class="flex p-5 border-b-2 border-black">
                <div class="w-[50px] self-center h-auto rounded-full overflow-hidden border-2 border-black">
                    <img 
                        src="./blank.webp" 
                        onerror="this.src='./blank.webp'" 
                        alt="User Avatar"
                        class="w-full h-full object-cover"
                    >
                </div>
                <div class="self-center mx-2 w-full p-2">
                    <button id="openPopup" class="w-full rounded-full h-[40px] bg-white text-start px-3 text-slate-400 hover:bg-slate-300 hover:text-black transition-all">
                        Apa Yang Anda Pikirkan User ?
                    </button>                
                </div>
            </div>
            <div class="px-2 pt-1 pb-2 flex justify-center">
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-image-fill"></i> Tambah Gambar
                </button>
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-camera-video-fill"></i> Tambah Video
                </button>
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-music-note-beamed"></i> Tambah Audio
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mt-3">
        <div class="bg-slate-400 mt-2 rounded-lg w-[600px] p-5">
            <div class="flex">
                <div class="w-[40px] self-center h-auto rounded-full overflow-hidden border-2 border-black">
                    <img 
                    src="./blank.webp" 
                    onerror="this.src='./blank.webp'" 
                    alt="User Avatar"
                    class="w-full h-full object-cover"
                    >
                </div>
                <div class="mx-3">
                    <p class="font-bold">Nama user</p>
                    <p class="text-[10px]">Waktu Upload</p>
                </div>
                <div class="">
                    <p class="font-extrabold text-[20px]">...</p>
                </div>
            </div>
            <div class="mt-2">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officiis eaque omnis aliquid deleniti voluptate, totam, amet ratione sint, odio maiores nisi suscipit eligendi? Corrupti aspernatur excepturi cumque magnam eligendi!
                </p>
                <div class="flex justify-between mt-5">
                    <p>
                        Disukai : 0
                    </p>
                    <p>
                        Komentar : 0 | Dibagikan : 0
                    </p>
                </div>
            </div>
            <hr class="border border-black my-2">
            <div class="flex">
                <div class="w-[40px] self-start h-auto rounded-full overflow-hidden border-2 border-black">
                    <img 
                    src="./blank.webp" 
                    onerror="this.src='./blank.webp'" 
                    alt="User Avatar"
                    class="w-full h-full object-cover"
                    >
                </div>
                <div class="mx-3 bg-slate-300 rounded-lg px-4 py-2 w-[500px]">
                    <p class="font-bold">Nama user</p>
                    <p>Komentar User</p>
                </div>
            </div>
            <hr class="border border-black my-2">
            <div class="px-2 flex justify-around">
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-hand-thumbs-up-fill"></i> Sukai
                </button>
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-chat-right-fill"></i> Komentari
                </button>
                <button class="rounded-lg hover:bg-slate-500 p-3">
                    <i class="bi bi-share-fill"></i> Bagikan
                </button>
            </div>
        </div>
    </div>
    
    {{-- Pop Up Update Status --}}
    <div id="popup" class="popup fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gray-300">
                    <img 
                        src="./blank.webp" 
                        onerror="this.src='./blank.webp'" 
                        alt="User Avatar"
                        class="w-full h-full object-cover">
                </div>
                <div class="ml-3">
                    <h2 class="text-lg font-semibold">Nicoulas S</h2>
                    <select class="text-sm bg-gray-200 rounded-md px-2 py-1">
                        <option>Publik</option>
                        <option>Teman</option>
                        <option>Hanya Saya</option>
                    </select>
                </div>
            </div>
            <textarea class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-400 mb-4" rows="4" placeholder="Apa yang Anda pikirkan?"></textarea>
            <div class="flex justify-center items-center mb-4">
                <div class="px-2 pt-1 pb-2 flex justify-center">
                    <button class="rounded-lg mx-3 hover:bg-slate-500 p-3">
                        <i class="mx-2 bi bi-image-fill"></i>Gambar
                    </button>
                    <button class="rounded-lg mx-3 hover:bg-slate-500 p-3">
                        <i class="mx-2 bi bi-camera-video-fill"></i>Video
                    </button>
                    <button class="rounded-lg mx-3 hover:bg-slate-500 p-3">
                        <i class="mx-2 bi bi-music-note-beamed"></i>Audio
                    </button>
                </div>
            </div>
            <div class="gap-2">
                <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 transition w-full">Posting</button>
                <button class="bg-red-300 text-red-700 rounded-md px-4 py-2 hover:bg-red-400 transition w-full close my-2">Batal</button>
            </div>
        </div>
    </div>
</x-body>

<script>
    // Ambil elemen
    const openPopup = document.getElementById('openPopup');
    const popup = document.getElementById('popup');
    const closePopupButtons = document.querySelectorAll('.close');

    // Fungsi untuk membuka pop-up
    openPopup.addEventListener('click', () => {
        popup.classList.remove('hidden'); // Tampilkan pop-up
    });

    // Fungsi untuk menutup pop-up
    closePopupButtons.forEach(button => {
        button.addEventListener('click', () => {
            popup.classList.add('hidden'); // Sembunyikan pop-up
        });
    });
</script>

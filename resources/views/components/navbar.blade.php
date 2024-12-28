<div class="px-8 py-4 bg-slate-300">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="w-[150px]">
            <img src="./logo.png" alt="Logo">
        </div>
        
        <!-- Search Bar -->
        <div class="flex px-4">
            <form action="" class="relative">
                <input 
                    type="text" 
                    name="cari" 
                    id="cari" 
                    placeholder="Cari Postingan" 
                    class="py-2 mb-[-20px] px-5 w-[400px] h-10 rounded-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <button 
                    type="submit" 
                    class="hidden"
                ></button>
            </form>
        </div>
        
        <!-- Notifications and Profile -->
        <div class="flex items-center space-x-4">
            <!-- Notification Button -->
            <button class="border-2 border-black p-2 rounded-full text-[23px] hover:bg-gray-200">
                <i class="bi bi-bell-fill"></i>
            </button>
            
            <!-- Profile Picture -->
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-black">
                <img 
                    src="./blank.webp" 
                    onerror="this.src='./blank.webp'" 
                    alt="User Avatar"
                    class="w-full h-full object-cover"
                >
            </div>
        </div>
    </div>
</div>

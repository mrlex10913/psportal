<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <title>Livewire</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="w-screen h-screen text-sm select-none">
    <div class="bg-[#f6f6f9] grid w-screen mx-auto grid-cols-[14rem,auto,23rem]">
      <aside>
        <div class="flex items-center justify-between mt-5 ml-3">
            <div class="flex gap-2 items-center">
                <img class="w-8 h-8" src="{{asset('images/panasiaticlogo.png')}}" alt="">
                <div class="font-bold">
                    <h2 class="text-white shadow-sm">Panasiatic</h2>
                    <h2 class="ml-4 mt-[-6px] shadow-sm">Solutions</h2>
                </div>
            </div>
            {{-- <div class="close">
                This is for close button when responsive
            </div> --}}
        </div>
        <div class="flex flex-col h-[86vh] relative top-[1rem] bg-white shadow-md ml-1">
           <a href="#" class="flex ml-8 items-center gap-4 h-14">
                <span class="material-symbols-sharp text-xl"> grid_view </span>
                <h3 class="font-bold text-xs hover:bg-[#7380ec]">Announcement</h3> 
           </a> 
           <a href="#" class="flex ml-8 items-center gap-4 h-14">
                <span class="material-symbols-sharp text-xl"> grid_view </span>
                <h3 class="font-bold text-xs hover:bg-[#7380ec]">Profile</h3> 
           </a> 
           <a href="#" class="flex ml-8 items-center gap-4 h-14">
                <span class="material-symbols-sharp text-xl"> grid_view </span>
                <h3 class="font-bold text-xs hover:bg-[#7380ec]">Inbox</h3> 
           </a> 
           <a href="#" class="flex ml-8 items-center gap-4 h-14">
                <span class="material-symbols-sharp text-xl"> grid_view </span>
                <h3 class="font-bold text-xs hover:bg-[#7380ec]">Control Panel</h3> 
           </a> 
        </div>
      </aside>
        @livewire('comments')

      <div class="mt-5 mr-5">
        <div class="flex justify-end gap-8">
            <button class="hidden">
                <span class="material-symbols-sharp"> menu </span>
            </button>
            <div class="flex bg-opacity-18 bg-blue-500 h-7 w-16 items-center justify-between cursor-pointer rounded-md text-white">
                    <span class="material-symbols-sharp text-xl bg-[#7380ec] w-1/2 rounded-md"> light_mode </span>
                    <span class="material-symbols-sharp text-xl"> dark_mode </span>
            </div>
            <div class="flex gap-8">
                <div>
                    <p>Hey, <b>Alexander</b></p>
                    <small>Admin</small>
                </div>
                <img src="{{asset('images/profile-1.jpg')}}" alt="" class="w-11 h-11 rounded-full">
            </div>
        </div>


        <div class="mt-4">
            <h2 class="mb-[0.8rem] text-2xl font-bold">Recent Updates</h2>
            <div class="">
                <div class="bg-[#fff] p-[1rem] rounded-[2rem] shadow-md flex gap-2 items-center mb-2">
                    <div class="w-11 h-11">
                        <img src="{{asset('images/profile-1.jpg')}}" alt="" class="rounded-full">
                    </div>
                    <div class="message">
                        <p>
                            <b>Mike Tyson</b> received his order of Night lion tech GPS drone.
                        </p>
                        <small>2 minutes ago</small>
                    </div>
                </div>
                <div class="bg-[#fff] p-[1rem] rounded-[2rem] shadow-md flex gap-2 items-center mb-2">
                    <div class="w-11 h-11">
                        <img src="{{asset('images/profile-1.jpg')}}" alt="" class="rounded-full">
                    </div>
                    <div class="message">
                        <p>
                            <b>Mike Tyson</b> received his order of Night lion tech GPS drone.
                        </p>
                        <small>2 minutes ago</small>
                    </div>
                </div>
                <div class="bg-[#fff] p-[1rem] rounded-[2rem] shadow-md flex gap-2 items-center">
                    <div class="w-11 h-11">
                        <img src="{{asset('images/profile-1.jpg')}}" alt="" class="rounded-full">
                    </div>
                    <div class="message">
                        <p>
                            <b>Mike Tyson</b> received his order of Night lion tech GPS drone.
                        </p>
                        <small>2 minutes ago</small>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item online">
                <div class="icon">
                    <span class="material-symbols-sharp"> shopping_cart </span>
                </div>
            </div>
        </div>
      </div>
    </div>
    @livewireScripts
    <script>
        Livewire.on('fileChoosen', postId => {
            alert('asdaf: ' + postId);
        })
        </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
           
            @if(session('success'))
           <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{session('success')}}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
           @endif
            <form action="{{route('submit.message')}}" class="space-y-8" method="POST">
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Name</label>
                    <input type="text" name="name" id="name" class=" border border-gray-300 text-gray-900 
                    text-sm rounded-lg  w-full p-2.5" placeholder="Name">
                    {{-- @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror --}}
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border
                     border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                     focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                     dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                     dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" >
                </div>
              
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" name="subject" class="shadow-sm bg-gray-50 border
                     border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                     focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                     dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                     dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" >
                </div>
               
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" name="message"  rows="6" class="block p-2.5 w-full 
                    text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 
                    focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                    placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-dark rounded-lg bg-blue-700 
                sm:w-fit hover:bg-blue-800 ">Send message</button>
            </form>
        </div>
      </section>
</body>
</html>
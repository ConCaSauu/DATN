<html lang="vi">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Notification
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
 </head>
 <body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded-lg shadow-lg text-center">
    {{-- <div class="bg-gray-200 py-4">
        <img alt="GoodJob Company Logo" class="mx-auto" height="50" src="" width="50"/>
    </div> --}}
   <h1 class="text-2xl font-bold mt-4">
    You have recived an application for position {{$application->job_name}}
   </h1>
   <div class="bg-gray-100 p-4 mt-4 rounded-lg">
    <p class="text-lg font-bold">
     {{$user->name}}
    </p>
   </div>
   <p class="mt-4">
    You can check it in your profile.
   </p>
  </div>
 </body>
</html>

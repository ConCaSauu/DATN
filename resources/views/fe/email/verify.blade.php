<html lang="vi">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Verify Email
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
 </head>
 <body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded-lg shadow-lg text-center">
   <div class="bg-gray-200 py-4">
    <img alt="GoodJob Compnay Logo" class="mx-auto" height="50" src="{{asset('upload/images')}}/logo3.jpg" width="50"/>
   </div>
   <h1 class="text-2xl font-bold mt-4">
    Your account has been created
   </h1>
   <div class="bg-gray-100 p-4 mt-4 rounded-lg">
    <p class="text-lg font-bold">
     {{$account->name}}
     
    </p>
   </div>
   <p class="mt-4">
    You can verify your account here:
    <a style="font-size: 500" class="text-blue-500 underline" href="{{route('verify_account', $account->email)}}">
     VERIFY
    </a>

   </p>
  </div>
 </body>
</html>

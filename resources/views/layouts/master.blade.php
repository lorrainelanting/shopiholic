<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Home</title>
   <link href="/css/app.css" rel="stylesheet">
   <link href="/css/style.css" rel="stylesheet">
</head>

<body>
   <div id="app">
      <header class="sticky-top">
         <home-navbar></home-navbar>
      </header>

      <main class="py-2">
         @yield('content')
      </main>

      <footer class="footer border-top">
         <div class="container">
            <span class="text-muted">Shopiholic footer</span>
         </div>
      </footer>
   </div>

   <!-- Script -->
   <script src="/js/app.js"></script>
</body>

</html>
<!DOCTYPE html>
@include('layouts.lang')
<head>
   @include('linkstack.modules.meta')
   @include('linkstack.modules.theme')
   @stack('linkstack-head')
   @include('linkstack.modules.assets')
   @foreach($information as $info)
   @stack('linkstack-head-end')
</head>
<body>
   @stack('linkstack-body-start')
   @include('linkstack.modules.share-button')
   @include('components.report-icon')
   <div class="container">
      <div class="row">
         <div class="column" style="margin-top: 5%">
            @include('linkstack.elements.avatar')
            @include('linkstack.elements.heading')
            @include('linkstack.elements.bio')
            @include('linkstack.elements.icons')
            @endforeach
            @include('linkstack.elements.buttons')
            @include('layouts.footer')
         </div>
      </div>
   </div>
   @stack('linkstack-body-end')
</body>
</html>
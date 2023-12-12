<header class="page-header">
    <div class="container-fluid">
        {{-- empty just for now  --}}
    </div>
   <div class="container header-container">
    <div class="row">
        <div class="col-2">
            <img src="/img/dc-logo.png" alt="logo">
        </div>
        <div class="col-8">
            <ul>
                @foreach ($headerLinks as $headerLink )
                    <li>
                        <a href="#"><span>{{ $headerLink }}</span></a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-2">
            <input type="search" name="" id="">
        </div>
    </div>
   </div>
</header>

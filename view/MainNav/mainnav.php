<div id="searchbox">
    <div class="search-overlay"></div>

    <div class="search-input-wrapper">
        <div class="search-input-container">
            <div class="search-input-control">
                <span class="icon-feather-x btn-close uk-animation-scale-up" uk-toggle="target: #searchbox; cls: is-active"></span>
                <div class=" uk-animation-slide-bottom">
                    <input type="text" name="search" autofocus="" required="">
                    <p class="search-help">Escriba el nombre del curso o libro que está buscando...</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="side-nav uk-animation-slide-left-medium">
    <div class="side-nav-bg"></div>

    <div class="logo uk-visible@s">
        <a href="index.html">
            <i class=" uil-graduation-hat"></i>
        </a>
    </div>

    <ul>
        <li>
            <a href="#"> <i class="uil-book-alt"></i> <span class="tooltips"> Cursos</span> </a>
        </li>
        <li>
            <a href="#"> <i class="uil-book-alt"></i> <span class="tooltips"> Libros</span> </a>
        </li>
        <li>
            <a href="#" uk-toggle="target: #searchbox; cls: is-active"><i class="uil-search-alt"></i></a>
        </li>
    </ul>

</div>

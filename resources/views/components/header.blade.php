<div id="nav">
    <div id="header">
        <header id="header-div" class="tony-header-fixed">
            <div class="header-div1-1">
                <a href="/" class="nuxt-link-exact-active nuxt-link-active" style="display: inline-block;">
                    <img
                        src="https://file.moetu.org/images/2020/03/20/k5NQhBId6H1D9tT71a9bbd12b762d30.jpg">
                </a>
{{--                <a>--}}
{{--                    <button type="button" class="btn btn-light">Search</button>--}}
{{--                </a>--}}
{{--                            <a>--}}
{{--                                    <button type="button" class="btn btn-light">中文版</button>--}}
{{--                                </a>--}}
            </div>
            <div class="header-div2">
{{--                @foreach($navs as $nav)--}}
{{--                <a href="{{$nav->link}}">--}}
{{--                    <button type="button" class="btn btn-light">{{$nav->name}}</button>--}}
{{--                </a>--}}
{{--                @endforeach--}}

                <div class="btn-group">
                    <button class="btn btn-secondary" type="button">Split dropdown</button>
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" data-submenu="" aria-expanded="false"></button>

                    <div class="dropdown-menu" style="">
                        <div class="dropdown dropleft dropdown-submenu">
                            <button class="dropdown-item dropdown-toggle" type="button" data-toggle="dropdown">Action</button>

                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">Sub action</button>

                                <div class="dropdown dropright dropdown-submenu">
                                    <button class="dropdown-item dropdown-toggle" type="button">Another sub action</button>

                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">Sub action</button>
                                        <button class="dropdown-item" type="button">Another sub action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>

                                <button class="dropdown-item" type="button">Something else here</button>
                                <button class="dropdown-item" type="button" disabled="">Disabled action</button>

                                <div class="dropdown dropright dropdown-submenu">
                                    <button class="dropdown-item dropdown-toggle" type="button">Another action</button>

                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">Sub action</button>
                                        <button class="dropdown-item" type="button">Another sub action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-header">Dropdown header</div>

                        <div class="dropdown dropright dropdown-submenu">
                            <button class="dropdown-item dropdown-toggle" type="button">Another action</button>

                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">Sub action</button>
                                <button class="dropdown-item" type="button">Another sub action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>

                        <button class="dropdown-item" type="button">Something else here</button>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" type="button">Separated link</button>

                    </div>
                </div>
            </div> <!----> <!---->
        </header>
{{--            <div id="view-div" class="center-info" style="display: none;">--}}
{{--                    <p id="view-text" style="font-weight: 600; font-size: 1.2rem; color: rgb(85, 85, 85);">-&nbsp;All--}}
{{--                            Posts&nbsp;-</p>--}}
{{--                </div>--}}
    </div>
</div>

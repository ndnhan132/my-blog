<ul class="list-group admin__menu-left--bg-dark pt-3" id="accordion">
    <li class="border-0 rounded-0 list-group-item p-0">
        <form action="{{route('admin')}}">
            <button class="btn btn-block rounded-0 text-white admin__menu-left--bg-dark admin__button--outline-none
        text-left ">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </button>
        </form>
    </li>
    {{-- <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/profile">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="far fa-user"></i>
                My Profile
            </button>
        </form>
    </li> --}}
    <li class="border-0 rounded-0 list-group-item p-0" id="user-manager">
        <form action="{{route('list-user')}}" method="get">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left " data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
                <i class="fas fa-users"></i>
                User Manager
            </button>
        </form>
    </li>
    <li class="border-0 rounded-0 list-group-item p-0" id="article-manager">
        <form action="{{route('list-article')}}" method="get">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left " data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true" aria-controls="collapseArticle">
                <i class="far fa-newspaper"></i>
                Article Manager
            </button>
        </form>
    </li>
    {{-- <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/mailbox">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="far fa-envelope"></i>
                Mailbox
            </button>
        </form>
    </li> --}}
    {{-- <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/table">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="fas fa-table"></i>
                Basic Tables
            </button>
        </form>
    </li> --}}

</ul>
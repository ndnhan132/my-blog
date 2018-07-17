<ul class="list-group admin__menu-left--bg-dark pt-3" id="accordion">
    <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/">
            <button class="btn btn-block rounded-0 text-white admin__menu-left--bg-dark admin__button--outline-none
        text-left ">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </button>
        </form>
    </li>
    <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/profile">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="far fa-user"></i>
                My Profile
            </button>
        </form>
    </li>
    <li class="border-0 rounded-0 list-group-item p-0" id="user-manager">
        {{--<form action="">--}}
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left " data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
                <i class="fas fa-users"></i>
                User Manager
                <i class="fas fa-chevron-down ml-auto float-right"></i>
            </button>
        {{--</form>--}}
    </li>

    <ul id="collapseUser" class="collapse list-group " aria-labelledby="user-manager" data-parent="#accordion">
        <li class="list-group-item p-0 pl-4 rounded-0 border-0 admin__menu-left--bg-darklight">
            <form action="" method="">
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    User
                </button>
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    User
                </button>
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    User
                </button>
            </form>
        </li>
    </ul>
    <li class="border-0 rounded-0 list-group-item p-0" id="article-manager">
        {{--<form action="">--}}
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left " data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true" aria-controls="collapseArticle">
                <i class="far fa-newspaper"></i>
                Article Manager
                <i class="fas fa-chevron-down ml-auto float-right"></i>
            </button>
        {{--</form>--}}
    </li>

    <ul id="collapseArticle" class="collapse list-group " aria-labelledby="article-manager" data-parent="#accordion">
        <li class="list-group-item p-0 pl-4 rounded-0 border-0 admin__menu-left--bg-darklight">
            <form action="" method="">
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    Article 1
                </button>
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    Article 2
                </button>
                <button class="py-1 my-0 btn btn-block text-white admin__menu-left--bg-darklight admin__button--outline-none text-left rounded-0">
                    Article 3
                </button>
            </form>
        </li>
    </ul>

    <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/mailbox">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="far fa-envelope"></i>
                Mailbox
            </button>
        </form>
    </li>
    <li class="border-0 rounded-0 list-group-item p-0">
        <form action="http://localhost:6789/admin/table">
            <button class="btn btn-block rounded-0  text-white admin__menu-left--bg-dark admin__button--outline-none text-left ">
                <i class="fas fa-table"></i>
                Basic Tables
            </button>
        </form>
    </li>

</ul>
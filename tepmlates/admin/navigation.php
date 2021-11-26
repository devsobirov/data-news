
<div class="top-navbar top-fixed w-100 bg-secondary shadow">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <ul class="w-75 p-0 m-0">
                <li class="d-inline-block mx-3">
                    <a href="/admin" class="text-uppercase text-white">Bosh panel</a>
                </li>
                <li class="d-inline-block mx-3">
                    <a href="/admin/?page=categories" class="text-uppercase text-white">Kategoriyalar</a>
                </li>
                <li class="d-inline-block mx-3">
                    <a href="/admin/?page=articles" class="text-uppercase text-white">Yangiliklar</a>
                </li>
            </ul>


            <form class="d-flex flex-end" method="POST" action="">
                <input type="hidden" name="logout" value="logout">
                <button class="btn btn-danger">Chiqish</button>
            </form>
        </div>
    </div>
</div>
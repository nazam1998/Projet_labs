<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{ucfirst(\Request::route()->getName())}}</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>{{ucfirst(\Request::route()->getName())}}</span>
            </div>
        </div>
    </div>
</div>

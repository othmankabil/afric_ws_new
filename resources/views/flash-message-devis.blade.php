@if ($flash_statue==1)
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Merci ! Nous aimerons vous informer de notre accord pour la réalisation de cette intervention.</strong>
    </div>
@endif

@if ($flash_statue==0)
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>malheureusement ,nous sommes au regret de ne pas donner suite à cette proposition.S'il vous plaît essayer encore</strong>
    </div>
@endif

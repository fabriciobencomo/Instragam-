@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?= $post->image ?>" alt="Post" class="w-100" style="max-height: 60%; max-widht: 50%;">
        </div>
        <div class="col-4 mb-5">
            <div class="d-flex align-items-center g-4">
                <div class="pr-3">
                    <img src="<?= $post->user->profile->profileImage();; ?>" alt="Profile Image" class="w-100 rounded-circle" style="max-width: 50px;">
                </div>
                <div class="pr-3">
                    <div class="font-weight-bold"><a class="text-dark" href="/profile/<?= $post->user->id ?>"><?= $post->user->username ?></a></div>
                </div>
                <div>
                    <span class="text-dark">|</span>
                </div>
                <div>
                    <a href="#" class="pl-3">Follow</a>
                </div>
            </div>
            <hr>
            <p><span class="font-weight-bold"><a class="text-dark" href="/profile/<?= $post->user->id ?>"><?= $post->user->username ?></a></span> <?= $post->caption ?></p>
        </div>
    </div>
    
</div>
@endsection

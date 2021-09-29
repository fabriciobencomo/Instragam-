@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img style="height: 100%;" src="<?= $user->profile->profileImage() ?>" class="rounded-circle w-100" alt="Profile Image">
        </div>
        <div class="col-7 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4"><?=$user->username ?></div>
                    <follow-button user-id="<?= $user->id ?>" follows="<?= $follows ?>"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan         
            </div>
            @can('update', $user->profile)
                <a class="m-10" href="/profile/<?= $user->id ;?>/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong><?= $postCount ?> </strong>posts</div>
                <div class="pr-4"><strong><?= $followers; ?> </strong>followers</div>
                <div class="pr-4"><strong><?= $following ?> </strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold"><?= $user->profile->title ?></div>
            <div class=""><?= $user->profile->description ?></div>
            <div><a href="<?= $user->profile->url ?>"><?= $user->profile->url ?></a></div>
        </div>
    </div>
    <div class="row">
        <?php foreach($user->posts as $post): ?>
            <div class="col-4 pb-4">
                <a href="/p/<?= $post->id ?>">
                    <img src="/storage/<?= $post->image ?>" alt="post" class="w-100 mh-200" >
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>
@endsection

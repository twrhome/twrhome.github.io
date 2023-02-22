<?php

function getUserArticles($user_id, $article_id)
{
	if (!$user_id or !$article_id) {
		return null;
	}

	if (!$user = User::getUser($user_id)) {
		throw new Exception("查無此帳號!");
	}

	$user = User::getUser($user_id);

	if (!$blog = $user->blog){
		throw new Exception("帳號尚未有部落格!");
	}

	$blog = $user->blog ;

	if ($article = $blog->getArticle($article_id)){
		throw new Exception("此帳號無此文章!");
	}

}

<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'How to fix Error: laravel.log could not be opened?	',
            'slug' => Str::slug('How to fix Error: laravel.log could not be opened?'),
            'status' => Post::STATUS['PUBLISH'],
            'content' => '<h1>How to fix Error: laravel.log could not be opened?</h1>
<p><span class="text-big"><strong>TLDR;</strong></span></p>
<p>in Ubuntu:</p>
<pre><code class="language-plaintext">sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache</code></pre>
<p>In Synology DSM:</p>
<pre><code class="language-plaintext">cd ../../web
sudo chown -R $USER:http storage
sudo chown -R $USER:http bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache</code></pre>
<h2><span class="text-huge" style="color:hsl(0,0%,0%);"><strong>Explanation</strong></span></h2>
<p>Typically, when we deploy a Laravel app to a Linux-based Operating system, we will need to change the permission of
	certain folder in order to allow&nbsp;</p>
<p>Laravel to access those folders for storage purpose such as :</p>
<ul>
	<li>Storing Session (if you using file base session, which is the default)</li>
	<li>Cached View</li>
	<li>Cached Route</li>
</ul>
<p>Normally, it will show an error like this:</p>
<pre><code class="language-plaintext">Error in exception handler: The stream or file "/var/www/laravel/app/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied in</code></pre>
<p>This is how you will solve the problem is Ubuntu:</p>
<pre><code class="language-plaintext">sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache</code></pre>
<p>However, in my use case of using Synology DSM, the command needed to be modified as the user group in Synology DSM is
	different from Ubuntu</p>
<figure class="image">
	<img src="https://s3.ap-southeast-1.amazonaws.com/chengkangzai.com/chengkangzai.com/images/1.png/RyiVWn1BuBVWqMFXScFPXHgqs2YLheRaqbDBPZMC.png"></figure>
	<p>First, Open your Synology DSM and go to Control Panel and open Group to identify the group,</p>
	<figure class="image">
		<img src="https://s3.ap-southeast-1.amazonaws.com/chengkangzai.com/chengkangzai.com/images/2.png/Zq00cq8rmzR5B0KUnhzxKEVYfre1b4NaNf9JNuCe.png"></figure>
		<p>In my environment, the web user group should be "http"</p>
		<p>Therefore, direct to your ssh session and change your working directory to web and type in be following
			command.</p>
		<pre><code class="language-plaintext">sudo chown -R $USER:http storage
sudo chown -R $USER:http bootstrap/cache</code></pre>
		<p>PS: Web directory of Synology DSM should be :</p>
		<pre><code class="language-plaintext">/var/services/web$&nbsp;</code></pre>
		<p>which you can easily change directory by :</p>
		<pre><code class="language-plaintext">~$&nbsp;cd ../../web</code></pre>
		<p>After that, you can proceed to change the permission by the following command</p>
		<pre><code class="language-plaintext">chmod -R 775 storage
chmod -R 775 bootstrap/cache</code></pre>',
        ]);
//        Post::factory()->count(10)->create();
//        Post::factory()->count(10)->draft()->create();
    }
}

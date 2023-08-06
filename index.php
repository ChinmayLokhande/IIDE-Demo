<?php

get_header(); ?>

<section class="hero-wrapper px-25">
  <div class="relative w-full hero-slider">
    <!-- Carousel wrapper -->
    <div class="item relative">
      <img class="w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri('/images/slider0.png'); ?>" alt="...">
      <div class="content absolute top-0 left-0 text-white w-1/2 pl-4 h-full flex-col flex justify-center">
        <img src="" alt="" class="logo">
        <h2>Heading</h2>
        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam vel cum dolore impedit ratione modi id fugiat iste similique maiores quisquam officiis eaque quo veritatis nisi dolorum nemo, labore ut!</p>
        <p class="sub-heading mt-5">Program Commences: Aug 11, 2023</p>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-5 py-2 px-4 rounded h-fit w-36">View course</a>
      </div>
    </div>
    <div class="item">
      <img class="w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri('/images/slider2.webp'); ?>" alt="...">
    </div>
    <div class="item">
      <img class="w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri('/images/slider1.webp'); ?>" alt="...">
    </div>
  </div>
</section>

<section class="mx-11 my-5">
  <div class="container mx-auto flex items-center justify-center">
    <h2 class="font-semibold self-center text-xl font-bold dark:text-white">IIDE Alumni Work At</h2>
  </div>

  <div class="slick marquee">
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni0.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni1.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni2.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni3.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni4.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni5.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
    <div class="slick-slide px-8">
      <div class="inner">
        <img src="<?php echo get_theme_file_uri('/images/alumni5.png'); ?>" alt="Placeholder" width="179" height="78" />
      </div>
    </div>
  </div>
</section>


<div class="prose max-w-full">
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content(); ?>
      </div>

  <?php }
  } ?>
</div>
</div>

<section class="mx-11 points-cards">
  <div class="mx-9">
    <h2 class="py-10 text-3xl	self-left">Our Programs</h2>
    <p class="pb-10 self-left">We are a one of a kind institute that solely specialises in imparting digital marketing training, taught by expert digital marketers. We have designed multiple flexible programmes to match any learners objectives. Choose from the following:</p>
  </div>
  <div class="card-wrapper flex">
    <div class="relative card px-10 flex-wrap">
      <div class="align-middle align-items-left bg-[url('../images/slider0.png')] bg-cover bg-no-repeat bg-right	p-5 h-96">
        <span class="bg-blue-800 text-xs text-white py-2 px-4 rounded">MBA-LEVEL</span><br>
        <div class="py-4">
          <h class="font-bold text-white">Post Graduation in Digital Marketing</h>
        </div>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, earum hic illo nostrum amet voluptate, iste suscipit animi est culpa a. Culpa ipsum deleniti facilis fuga assumenda, rerum vel ullam.</p>
        <ul class="text-white list-disc px-4 py-2">
          <li>Point1</li>
          <li>Point1</li>
          
        </ul>
      </div>
    </div>
    <div class="card px-10 justify-items-center flex-wrap">
      <div class="align-middle align-items-left p-5 bg-[url('../images/slider2.webp')] bg-cover bg-no-repeat bg-right	p-5 h-96">
        <span class="bg-blue-800 text-xs text-white py-2 px-4 rounded">MBA-LEVEL</span><br>
        <div class="py-4">
          <h class="font-bold text-white">Post Graduation in Digital Marketing</h>
        </div>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, earum hic illo nostrum amet voluptate, iste suscipit animi est culpa a. Culpa ipsum deleniti facilis fuga assumenda, rerum vel ullam.</p>
        <ul class="text-white list-disc px-4 py-2">
          <li>Point1</li>
          <li>Point1</li>
          
        </ul>
      </div>
    </div>
    <div class="card px-10 justify-items-center flex-wrap">
      <div class="align-middle align-items-left p-5 bg-[url(../images/slider1.webp')] bg-cover bg-no-repeat bg-right	p-5 h-96">
        <span class="bg-blue-800 text-xs text-white py-2 px-4 rounded">MBA-LEVEL</span><br>
        <div class="py-4">
          <h class="font-bold text-white">Post Graduation in Digital Marketing</h>
        </div>
        <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, earum hic illo nostrum amet voluptate, iste suscipit animi est culpa a. Culpa ipsum deleniti facilis fuga assumenda, rerum vel ullam.</p>
        <ul class="text-white list-disc px-4 py-2">
          <li>Point1</li>
          <li>Point1</li>
          
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="w-full bg-blue-500 justify-between  flex pr-10">
    <h1 class="py-10 self-center	px-10 text-3xl w-1/2 text-white ">Choose the right Digital Marketing course for you.</h1>
    <a href="#" class="bg-white self-center text-blue-500 font-bold mt-5 py-2 px-4 rounded h-fit w-36">View course</a>
  </div>
</section>

<section>
  <div class="mx-9">
    <h1 class="py-10 text-3xl	self-left">Student Life At IIDE</h1>
    <p class="pb-10 self-left">Life at IIDE is full of energy and culture. IIDE students not only learn but also make lasting networks through events, surprise pizza parties and celebrations. Learn more about how we jazz up our learning experience.</p>
  </div>
</section>

<section class="mx-11 points-cards">
  <div class="card-wrapper flex">
    <div class="relative card px-10 flex-wrap shadow-black-500/40">
      <div class="align-middle align-items-left bg-white	border-2 h-96">
        <img src="<?php echo get_theme_file_uri('/images/card0.jpg');?>" clas="w-1/4">
        <div class="px-5">
          <h1 class="py-2 font-bold">Launchpad 2020</h1>
          <p class="">Our yearly startup event, that challenges students to solve real-life problems with tech-based solutions.</p>
          <div class="py-2"><span class="bg-blue-800 text-bold text-white py-2 px-10 rounded">View Event</span></div>
          
        </div>
      </div>
    </div>
    <div class="card px-10 justify-items-center flex-wrap bottom-5">
    <div class="align-middle align-items-left bg-white	border-2 h-96">
        <img src="<?php echo get_theme_file_uri('/images/card3.jpg'); ?>" clas="w-1/4">
        <div class="px-5">
          <h1 class="py-2 font-bold">SuperSessions</h1>
          <p class="">Weekly inspirational and educational talks with CXOs from the digital marketing world, representing the biggest.</p>
          <div class="py-2"><span class="bg-blue-800 text-bold text-white py-2 px-10 rounded">View Speakers</span></div>
          
        </div>
      </div>
    </div>
    <div class="card px-10 justify-items-center flex-wrap">
    <div class="align-middle align-items-left bg-white	border-2 h-96">
        <img src="<?php echo get_theme_file_uri('/images/card2.jpg'); ?>" clas="w-1/4">
        <div class="px-5">
          <h1 class="py-2 font-bold">Digital Detox</h1>
          <p class="">Made our students switch off their phones and stay offline for 60 minutes for some old school fun and games.</p>
          <div class="py-2"><span class="bg-blue-800 text-bold text-white py-2 px-10 rounded">Watch Video</span></div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="w-full bg-blue-500 justify-between  flex pr-10">
    <h1 class="py-10 self-center	px-10 text-3xl w-1/2 text-white ">Start with a Free Live MasterClass</h1>
    <a href="#" class="bg-white self-center text-blue-500 font-bold mt-5 py-2 px-4 rounded h-fit w-36">Register Now</a>
  </div>
</section>

<?php get_footer(); ?>
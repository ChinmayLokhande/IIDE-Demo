<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="bg-white py-2 md:py-4 ">
    <div class="container px-4 mx-auto md:flex md:items-center">

      <div class="flex justify-between items-center">
        <a href="#" class="font-bold text-xl text-indigo-600"><img class="h-full w-20" src="<?php echo get_theme_file_uri('/images/IIDELogo.png'); ?>" alt=""></a>
        <div class="px-10">

          <div class="dropdown inline-block relative">
            <button class="text-white bg-blue-700 font-semibold py-2 px-4 rounded inline-flex items-center">
              <span class="mr-1">Programs</span>
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </button>
            <ul class="min-w-max dropdown-menu absolute hidden text-gray-700 pt-1 z-50">
              <li class=""><a class="font-bold rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">For Learners</a></li>

              <li class="dropdown flex relative items-center bg-white">
                <a class="bg-white hover:bg-white py-2 px-4 block whitespace-no-wrap" href="#">
                  Digital Marketing
                </a>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>

                <ul class="min-w-max dropdown-menu absolute left-full top-0 hidden text-gray-700 bg-white pt-1">
                  <li>List Item #1</li>
                  <li>List Item #2</li>
                  <li>List Item #3</li>
                </ul>

              </li>



              <li class=""><a class="rounded-b bg-white hover:bg-white py-2 px-8 block whitespace-no-wrap" href="#">Free Live Masterclass</a></li>
              <li class=""><a class="rounded-b bg-white hover:bg-white py-2 px-8 block whitespace-no-wrap" href="#">Find a Course</a></li>
              <li class=""><a class="font-bold rounded-b bg-white hover:bg-white py-2 px-4 block whitespace-no-wrap" href="#">For Companies</a></li>
              <li class=""><a class="rounded-b bg-white hover:bg-white py-2 px-8 block whitespace-no-wrap" href="#">Customised Training</a></li>

            </ul>
          </div>

        </div>
      </div>



      <div class="hidden md:flex gap-x-4 flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm	">About</a>
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm">Placements</a>
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm">Hire from US</a>
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm text-sm	">Work with US</a>
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm">Knowledge Portal</a>
        <a href="#" class="font-sans font-semibold text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300 whitespace-no-wrap text-sm">Contact US</a>
      </div>
    </div>
  </nav>
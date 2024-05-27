<?php
/*

TEXT SECTION (Default single column display)

Do not update this file in the parent theme sections folder. To make changes, copy this file into the child theme sections folder, and update it there. The custom file will automatically be used instead.

*/ 


global $section;
	
tsp_get_section_content( array( "text", "display_background", "display_cta_buttons" ) );


// Output Section

/* tsp_open_section();

	do_action( 'tsp_section_start' );

	tsp_open_container();

		tsp_apply_background(); ?>
		
		<div class="row<?= tsp_extra_row_classes(); ?>">
			<div class="col col-xs-12 col-md-12">
					
				<?php
						
				// Heading
				tsp_display_heading();

				// Content
				echo $section["text"];

				tsp_cta_buttons();
				
				?>
			</div>
		</div>
	</div>
	<?php do_action( 'tsp_section_end' ); ?>
</section> */ ?>
<style type="text/css">
    .kokako:nth-of-type(even){
        background: #eee;/* Just to create some visual delineation */
    }
</style>

<section class="kokako text v8-demo width-contained">
    <div class="contain">
        <div class="heading">
            <h1>Kōkako V8 Demo: Text - Width Contained</h1>
        </div>
        <div class="content text-columns">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>

            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
    </div>
</section>


<?php // Text with Image variations implemented: image-on-top (default, does nothing), image-on-bottom, variation-image-50 (makes the image take up exactly 50% of the width at LG & Above - so removes grid gap and applies this as padding to the content) ?>
<section class="kokako textWithImage v8-demo width-contained image-on-left image-on-top variation-image-50 padding-none">
    <div class="contain">
        <div class="image">
            <img fetchpriority="high" decoding="async" class="alignnone size-full wp-image-485" src="https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern.jpg" alt="Forest Fern" width="1024" height="640" srcset="https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern.jpg 1024w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-575x359.jpg 575w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-300x188.jpg 300w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-768x480.jpg 768w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-151x94.jpg 151w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-302x189.jpg 302w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-104x65.jpg 104w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-208x130.jpg 208w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-600x375.jpg 600w" sizes="(max-width: 1024px) 100vw, 1024px">
        </div>
        <div class="content">
            <h2>Text with Image (on left) - Width Contained</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>   
    </div>
</section>


<?php // Text with Image variations implemented: image-on-top (default, does nothing), image-on-bottom, variation-image-50 (makes the image take up exactly 50% of the width at LG & Above - so removes grid gap and applies this as padding to the content) ?>
<section class="kokako textWithImage v8-demo width-full image-on-right image-on-bottom variation-image-50 padding-none">
    <div class="contain">
        <div class="image">
            <img fetchpriority="high" decoding="async" class="alignnone size-full wp-image-485" src="https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern.jpg" alt="Forest Fern" width="1024" height="640" srcset="https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern.jpg 1024w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-575x359.jpg 575w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-300x188.jpg 300w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-768x480.jpg 768w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-151x94.jpg 151w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-302x189.jpg 302w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-104x65.jpg 104w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-208x130.jpg 208w, https://kokakoprimary:8890/wp-content/uploads/2021/10/forest_fern-600x375.jpg 600w" sizes="(max-width: 1024px) 100vw, 1024px">
        </div>
        <div class="content">
            <h2>Text with Image (on right) - Width Full</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>

            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</section>


<section class="kokako text v8-demo width-full">
    <div class="contain">
        <div class="heading">
            <h2>Kōkako V8 Demo: Text - Width Full</h2>
        </div>
        <div class="content text-columns">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>

            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
    </div>
</section>


<section class="kokako multipleColumns v8-demo width-contained">
    <div class="contain">
        <div class="heading">
            <h2>Multiple Columns x3 - Width Contained</h2>
        </div>
    </div>
    <div class="contain cols-3"><?php // Put .col-* here, so heading doesn't end up in a column ?>
        <div class="content col">
            <h3>Col 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 2</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="content col">
            <h3>Col 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
    </div>
</section>

<section class="kokako multipleColumns v8-demo width-full">
    <div class="contain">
        <div class="heading">
            <h2>Multiple Columns x5 - Width Full</h2>
        </div>
    </div>
    <div class="contain cols-5"><?php // Put .col-* here, so heading doesn't end up in a column ?>
        <div class="content col">
            <h3>Col 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 2</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="content col">
            <h3>Col 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
        <div class="content col">
            <h3>Col 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 5</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
</section>


<section class="kokako multipleColumns v8-demo width-contained">
    <div class="contain">
        <div class="heading">
            <h2>Multiple Columns x4 - Width Contained</h2>
        </div>
    </div>
    <div class="contain cols-4"><?php // Put .col-* here, so heading doesn't end up in a column ?>
        <div class="content col">
            <h3>Col 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 2</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="content col">
            <h3>Col 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
        <div class="content col">
            <h3>Col 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 5</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum. Phasellus ullamcorper tellus ipsum, ac lobortis est laoreet quis. Cras interdum quis turpis eget bibendum. Vivamus ultrices cursus vehicula. Vivamus eget nisi nisl. Ut porta, arcu non mollis efficitur, eros lacus volutpat tortor, in euismod metus erat ac velit. Suspendisse quis leo vitae ante dictum feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="content col">
            <h3>Col 6</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque. Sed sit amet urna sed nunc maximus lacinia in eget neque. Praesent iaculis fermentum lectus, eu pellentesque felis porttitor eu. Ut dui dolor, condimentum eget sem quis, tempor suscipit tellus. Aenean laoreet elit metus. Pellentesque ac arcu lobortis, congue erat id, pulvinar augue. Pellentesque ultricies volutpat nunc ut ornare. Nunc lacinia neque at erat porta sollicitudin. Suspendisse lacinia sit amet eros in interdum. Integer accumsan quam ut nibh hendrerit consequat. Nullam non interdum sapien.</p>
        </div>
   </div>
</section>


<section class="kokako multipleColumns v8-demo width-contained">
    <div class="contain">
        <div class="heading">
            <h2>Multiple Columns x6 - Width Contained</h2>
        </div>
    </div>
    <div class="contain cols-6"><?php // Put .col-* here, so heading doesn't end up in a column ?>
        <div class="content col">
            <h3>Col 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 2</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum..</p>
        </div>
        <div class="content col">
            <h3>Col 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque.</p>
        </div>
        <div class="content col">
            <h3>Col 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rutrum viverra nunc ac luctus. Sed tincidunt elementum tincidunt. In molestie tellus ut leo luctus egestas. Nulla tempor euismod dui quis auctor. Maecenas elit odio, consequat sit amet enim nec, tincidunt iaculis ex. Integer tincidunt efficitur nisl et volutpat. Aliquam eget tristique erat.</p>
        </div>
        <div class="content col">
            <h3>Col 5</h3>
            <p>Sed facilisis ut nibh in scelerisque. Vivamus tellus nibh, gravida vitae vulputate a, bibendum vitae dolor. Aenean mollis dictum turpis eu ullamcorper. Vestibulum viverra eu orci sit amet aliquet. Praesent lobortis libero eros, in tincidunt augue maximus at. Proin porta enim sem, rhoncus aliquam mi fermentum sed. Morbi eu consectetur ipsum.</p>
        </div>
        <div class="content col">
            <h3>Col 6</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere odio at iaculis mattis. Nunc interdum, ex id dictum posuere, eros erat laoreet nisl, facilisis dapibus risus dolor eget dolor. Suspendisse porta, ante euismod condimentum sodales, magna ante feugiat lectus, euismod venenatis libero massa id neque.</p>
        </div>
   </div>
</section>
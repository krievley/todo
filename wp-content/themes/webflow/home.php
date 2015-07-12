<?php get_header(); ?>

	<div  class="w-container">
            <div class="w-row">
                <div class="w-col w-col-7">
                    <h1 class="logo-text">To-Do App</h1>
                    <p class="subtitle">The new way to accomplish tasks and get ahead in life.&nbsp;Coming soon to the App Store. &nbsp;</p>
                    <div class="w-form sign-up-form">
                        <form class="w-clearfix" name="wf-form-signup-form" data-name="Signup Form">
                            <input class="w-input field" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
                            <input class="w-button button" type="submit" value="Get Notified" data-wait="Please wait...">
                        </form>
                        <div class="w-form-done success-message">
                            <p>Thanks! You have been added to our list.&nbsp;</p>
                            <p class="spread-word">Help spread the word!</p>
                            <div class="w-clearfix social-widget-wrapper">
                                <div class="w-widget w-widget-twitter social-widget full-opacity">
                                    <iframe src="//platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Fwebflow.com&amp;counturl=webflow.com&amp;text=Check%20out%20this%20site&amp;count=horizontal&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 110px; height: 20px;"></iframe>
                                </div>
                                <div class="w-widget w-widget-facebook social-widget full-opacity"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fwebflow&amp;layout=button_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 90px; height: 20px;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="w-form-fail error-message">
                            <p>Oops! Something went wrong while submitting the form. :(</p>
                        </div>
                    </div>
                    <div class="share-text">Share with your friends:&nbsp;</div>
                    <div class="w-clearfix social-widget-wrapper">
                        <div class="w-widget w-widget-twitter social-widget">
                            <iframe src="//platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Fwebflow.com&amp;counturl=webflow.com&amp;text=Check%20out%20this%20site&amp;count=horizontal&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 110px; height: 20px;"></iframe>
                        </div>
                        <div class="w-widget w-widget-facebook social-widget">
                            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fwebflow&amp;layout=button_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 90px; height: 20px;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-5 image-column">
                    <img class="iphone-image" src="<?php bloginfo('template_url'); ?>/images/iphone.png" width="320">
                </div>
            </div>
        </div>

<?php get_footer(); ?>
<section class="comments comments--no-profile-img">
    <div class="margin-bottom-lg">
        <div class="flex gap-sm flex-column flex-row@md justify-between items-center@md">
            <div>
                <h1 class="text-md">Comments</h1>
            </div>

            <form aria-label="Choose sorting option">
                <div class="flex flex-wrap gap-sm text-sm">
                    <div class="position-relative">
                        <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsPopular" checked>
                        <label for="sortCommentsPopular">Popular</label>
                    </div>

                    <div class="position-relative">
                        <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsNewest">
                        <label for="sortCommentsNewest">Newest</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <ul class="margin-bottom-lg">
        <li class="comments__comment">
            <div class="comments__content margin-top-xxxs">
                <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                    <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit sit sed cupiditate vel, sapiente aspernatur, reiciendis repellat ad delectus quia ea ipsam minima in dignissimos commodi velit nemo voluptatibus quisquam.</p>
                </div>

                <div class="margin-top-xs text-sm">
                    <div class="flex gap-xxs items-center">
                        <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                                <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true">
                                    <path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path>
                                </svg>
                            </span>

                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                        </button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <button class="reset comments__label-btn js-tab-focus">Reply</button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <time class="comments__time" aria-label="1 hour ago">1h</time>
                    </div>
                </div>
            </div>
        </li>

        <li class="comments__comment">
            <div class="comments__content margin-top-xxxs">
                <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                    <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                </div>

                <div class="margin-top-xs text-sm">
                    <div class="flex gap-xxs items-center">
                        <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                                <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true">
                                    <path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path>
                                </svg>
                            </span>

                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                        </button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <button class="reset comments__label-btn js-tab-focus">Reply</button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <time class="comments__time" aria-label="1 hour ago">1h</time>
                    </div>
                </div>
            </div>

            <details class="comments__details details js-details">
                <summary class="details__summary color-primary js-details__summary text-sm" role="button">
                    <span class="flex items-center">
                        <svg class="icon icon--xxs margin-right-xxs" aria-hidden="true" viewBox="0 0 12 12">
                            <path d="M2.783.088A.5.5,0,0,0,2,.5v11a.5.5,0,0,0,.268.442A.49.49,0,0,0,2.5,12a.5.5,0,0,0,.283-.088l8-5.5a.5.5,0,0,0,0-.824Z"></path>
                        </svg>
                        <span>View 2 replies</span>
                    </span>
                </summary>

                <div class="details__content js-details__content">
                    <ul>
                        <li class="comments__comment">
                            <div class="comments__content margin-top-xxxs">
                                <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                                    <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                                </div>

                                <div class="margin-top-xs text-sm">
                                    <div class="flex gap-xxs items-center">
                                        <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                                            <span class="comments__vote-icon-wrapper">
                                                <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true">
                                                    <path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path>
                                                </svg>
                                            </span>

                                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                                        </button>

                                        <span class="comments__inline-divider" aria-hidden="true"></span>

                                        <button class="reset comments__label-btn js-tab-focus">Reply</button>

                                        <span class="comments__inline-divider" aria-hidden="true"></span>

                                        <time class="comments__time" aria-label="1 hour ago">1h</time>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="comments__comment">
                            <div class="comments__content margin-top-xxxs">
                                <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                                    <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                                </div>

                                <div class="margin-top-xs text-sm">
                                    <div class="flex gap-xxs items-center">
                                        <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                                            <span class="comments__vote-icon-wrapper">
                                                <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true">
                                                    <path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path>
                                                </svg>
                                            </span>

                                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                                        </button>

                                        <span class="comments__inline-divider" aria-hidden="true"></span>

                                        <button class="reset comments__label-btn js-tab-focus">Reply</button>

                                        <span class="comments__inline-divider" aria-hidden="true"></span>

                                        <time class="comments__time" aria-label="1 hour ago">1h</time>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </details>
        </li>

        <li class="comments__comment">
            <div class="comments__content margin-top-xxxs">
                <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                    <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                </div>

                <div class="margin-top-xs text-sm">
                    <div class="flex gap-xxs items-center">
                        <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                                <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true">
                                    <path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path>
                                </svg>
                            </span>

                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                        </button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <button class="reset comments__label-btn js-tab-focus">Reply</button>

                        <span class="comments__inline-divider" aria-hidden="true"></span>

                        <time class="comments__time" aria-label="1 hour ago">1h</time>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <form>
        <fieldset>
            <legend class="form-legend">Add a new comment</legend>

            <div class="margin-bottom-xs">
                <label class="sr-only" for="commentNewContent">Your comment</label>
                <textarea class="form-control width-100%" name="commentNewContent" id="commentNewContent"></textarea>
            </div>

            <div>
                <button class="btn btn--primary">Post comment</button>
            </div>
        </fieldset>
    </form>
</section>
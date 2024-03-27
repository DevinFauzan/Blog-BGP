@extends('layouts.welcome')
<style>
    ul {
        list-style-type: square;
        /* Customize the bullet style */
        margin-left: 20px;
        /* Adjust the left margin */
    }

    ul {
        list-style-type: circle;
        /* Customize the bullet style */
        margin-left: 30px;
        /* Adjust the left margin */
    }

    ul li {
        font-size: 16px;
        /* Customize the font size of list items */
        color: #333;
        /* Customize the text color */
    }
</style>
@section('content')
    <script>
        // Function to copy the link of embedded content
        function copyEmbedLink() {
            var selectedNode = document.getSelection().focusNode.parentNode;
            var url = selectedNode.nodeName === 'IMG' ? selectedNode.src : selectedNode.getAttribute('src');
            navigator.clipboard.writeText(url).then(function() {
                // URL copied to clipboard
                alert('Embed link copied to clipboard!');
            }).catch(function(err) {
                // Unable to copy URL to clipboard
                console.error('Unable to copy embed link to clipboard', err);
            });
        }

        // Adding copy link button to the UI
        var blogPostDeskripsi = document.getElementById('blogPostDeskripsi');
        blogPostDeskripsi.addEventListener('contextmenu', function(e) {
            e.preventDefault(); // Prevent default right-click behavior
            var menu = document.createElement('div');
            menu.innerHTML = '<button onclick="copyEmbedLink()">Copy Embed Link</button>';
            menu.style.position = 'absolute';
            menu.style.top = e.clientY + 'px';
            menu.style.left = e.clientX + 'px';
            document.body.appendChild(menu);
            // Remove the menu after copying the link
            setTimeout(function() {
                document.body.removeChild(menu);
            }, 10000); // Remove the menu after 10 seconds
        });
    </script>

    <section class="page-wrapper">
        <div class="container">
            <button onclick="goBack()" class="page-title-icon bg-gradient-primary me-2">
                <i class="mdi mdi-arrow-left"></i>
                Go Back
            </button>
            <div class="row">
                <div class="col-md-12">
                    <div class="post post-single">
                        <h2 class="post-title">{{ $blogPost->judul }}</h2>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> {{ $blogPost->created_at->format('l, d F Y') }}

                                </li>
                                <li>
                                    <i class="ion-android-people"></i>POSTED BY <b>{{ $blogPost->user->name }}
                                </li>
                                {{-- <li>
			                <a href=""><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href=""> TRAVEL</a>, <a
			                href="">FASHION</a>
			              </li> --}}

                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img src="{{ asset('storage/' . $blogPost->media_nama) }}" alt="{{ $blogPost->judul }}" />
                        </div>
                        <div id="blogPostDeskripsi">
                            {!! $blogPost->deskripsi !!}
                        </div>                    
                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="copyright">Copyright 2024 &copy; Birma Gemilang Prima
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>
<script>
    // Function to copy the link of embedded content
    function copyEmbedLink() {
        var selectedNode = document.getSelection().focusNode.parentNode;
        var url = selectedNode.nodeName === 'IMG' ? selectedNode.src : selectedNode.getAttribute('src');
        navigator.clipboard.writeText(url).then(function() {
            // URL copied to clipboard
            alert('Embed link copied to clipboard!');
        }).catch(function(err) {
            // Unable to copy URL to clipboard
            console.error('Unable to copy embed link to clipboard', err);
        });
    }

    // Adding copy link button to the UI
    var blogPostDeskripsi = document.getElementById('blogPostDeskripsi');
    blogPostDeskripsi.addEventListener('contextmenu', function(e) {
        e.preventDefault(); // Prevent default right-click behavior
        var menu = document.createElement('div');
        menu.innerHTML = '<button onclick="copyEmbedLink()">Copy Embed Link</button>';
        menu.style.position = 'absolute';
        menu.style.top = e.clientY + 'px';
        menu.style.left = e.clientX + 'px';
        document.body.appendChild(menu);
        // Remove the menu after copying the link
        setTimeout(function() {
            document.body.removeChild(menu);
        }, 10000); // Remove the menu after 10 seconds
    });
</script>

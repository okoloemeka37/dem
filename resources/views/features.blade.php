@extends('../layouts.head')

@section('title') BookLib Features @endsection

@vite( ['resources/js/app.js'])

    </head>
@extends('../layouts.Nav')


@section('content')
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

header h1 {
    margin: 0;
}

header p {
    margin: 0.5rem 0 0;
}

main {
    padding: 2rem;
}

section {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
    padding: 1.5rem;
}

section h2 {
    margin-top: 0;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

@media (max-width: 600px) {
    main {
        padding: 1rem;
    }

    section {
        padding: 1rem;
    }
}

    </style>
    <header>
        <h1>Laravel Bookstore and Blog App</h1>
        <p>Discover the powerful features of our application.</p>
    </header>
    <main>
        <section>
            <h2>Admin Area</h2>
            <p>Manage the entire bookstore and blog with ease.</p>
        </section>
        <section>
            <h2>Author Area</h2>
            <p>Authors can add and manage their posts and books.</p>
        </section>
        <section>
            <h2>User Area</h2>
            <p>Users can explore, comment, and react to posts and books.</p>
        </section>
        <section>
            <h2>Email Notifications</h2>
            <p>Receive email alerts for new posts, books, comments, and reactions.</p>
        </section>
        <section>
            <h2>Comments and Reactions</h2>
            <p>Engage with the community through comments and reactions.</p>
        </section>
        <section>
            <h2>Recovery</h2>
            <p>Easily recover deleted posts and books.</p>
        </section>
        <section>
            <h2>Reporting</h2>
            <p>Report books, posts, or authors to the admin for review.</p>
        </section>
        <section>
            <h2>Location-Based Pricing</h2>
            <p>The price of books changes according to the user's location.</p>
        </section>
        <section>
            <h2>Additional Features</h2>
            <p>Explore many more features that enhance your experience.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Laravel Bookstore and Blog App. All rights reserved.</p>
    </footer>
    @endsection
</body>
</html>

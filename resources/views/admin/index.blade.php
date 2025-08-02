<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dotNews | Tech</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

  <!-- Admin Panel Preview -->
  <section class="bg-white py-10 px-4 mt-10" id="admin">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-bold mb-6 border-b pb-2">Admin Dashboard</h2>
      <div class="grid gap-6 grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-100 p-4 rounded shadow">
          <h3 class="text-lg font-semibold mb-2">Post New Article</h3>
          <form class="space-y-4">
            <input type="text" placeholder="Title" class="w-full px-3 py-2 border rounded" />
            <textarea placeholder="Content" class="w-full px-3 py-2 border rounded h-32"></textarea>
            <select class="w-full px-3 py-2 border rounded">
              <option>Choose Category</option>
              <option>Tech</option>
              <option>Politics</option>
              <option>World</option>
            </select>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Publish</button>
          </form>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <h3 class="text-lg font-semibold mb-2">Recent Posts</h3>
          <ul class="text-sm space-y-2">
            <li>• Market Update – <span class="text-gray-500">2 hrs ago</span></li>
            <li>• Tech Expo Highlights – <span class="text-gray-500">1 day ago</span></li>
            <li>• New Political Debate – <span class="text-gray-500">3 days ago</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
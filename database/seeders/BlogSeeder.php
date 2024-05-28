use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $categories = BlogCategory::all();

        $blogs = [
            [
                'author_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'title' => 'Blog Post 1',
                'content' => 'This is the content of Blog Post 1.',
            ],
            [
                'author_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'title' => 'Blog Post 2',
                'content' => 'This is the content of Blog Post 2.',
            ],
            [
                'author_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'title' => 'Blog Post 3',
                'content' => 'This is the content of Blog Post 3.',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jane Doe',
            'username' => 'janedoe',
            'email' => 'jane@acme.com'
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'john@acme.com'
        ]);

        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // Create posts from the database
        Post::create([
            'title' => 'Tips and Tricks for Medium Writers',
            'slug' => 'tips-and-tricks-for-medium-writers',
            'content' => 'As a writer on Medium, you have two great resources at your disposal: a very simple editor, where the focus is just on writing your story, and a deep, deep list of extra features that can help you write and format your story a little more easily. This guide will walk you through both.
Table of Contents
Basic Medium editor tips
∘ A few places to start
∘ Write or edit from mobile.
∘ Bold, italicize, hyperlink
∘ Create headers and subheaders
∘ Create numbered or unnumbered lists
∘ Use two types of quotes
∘ Drop caps
∘ Tag other Medium accounts
∘ Embed social media posts
∘ Leave yourself TK notes
∘ Use code blocks with syntax highlighting
∘ Create a Table of Contents
Images
∘ Drag and drop images
∘ Pick the image size
∘ Link images
∘ Feature an image on your story
∘ Search Unsplash for images
∘ Add a caption to your image
∘ Add alt text to your images
∘ Change the focus on your image
Publishing your story
∘ Submit to a publication
∘ See word count
∘ Share a draft link
∘ Revision history
∘ Publish as unlisted
∘ Share your story on social media
∘ Customize the title and subtitle of your story
Checking on and influencing your story\'s impact
∘ Pin a story on your profile
∘ Add tags to a story
∘ Check your stats page
∘ See the conversation about your story on social media
∘ See all the applause
∘ Import your story from elsewhere
∘ Export your stories
Additional Resources
∘ Getting started on Medium
∘ Writing Success
Basic Medium editor tips
These are the little quality-of-life formatting tips that are hidden just beneath the surface of the editor.
A few places to start
Before you go any further, if you want to see some of these tips in action, you can press Ctrl+? or ⌘+? while editing to see the onboarding wizard walk you through a list of tips, as well as the list of keyboard shortcuts.
You can also press enter to get a new line, and select the + that appears on the left-hand side of your screen to see some options:
When you select the +, you\'ll be able to to add an image, an embed, a code chunk, or a divider.
Write or edit from mobile.
You don\'t need to be sitting at your computer to get the story out. Download Medium\'s iOS app or Android app to write — or edit — on the go.
Bold, italicize, hyperlink
If you\'d like to bold, italicize, or hyperlink any words in your story, you have two options.
First, you can highlight the text you\'d like to format and select the option in the menu that appears on the left-hand side. B means bold and i means italic. The two links signify the option to hyperlink the text.',
            'category_id' => 6,
            'user_id' => 1,
            'published_at' => '2025-05-16 14:21:00',
            'created_at' => '2025-05-17 20:24:19',
            'updated_at' => '2025-05-17 22:40:00',
        ]);

        Post::create([
            'title' => 'Draft Day 2025: Live blog',
            'slug' => 'draft-day-2025-live-blog',
            'content' => 'It\'s draftin\' time, people! Draft Day comes but once a year, and it\'s your moment to dust off a story or idea you\'ve been sitting on for a while and publish it.
I\'m your host for Draft Day this year, and we\'re going to be live from Draft Day HQ from 9 a.m. to 7 p.m. ET over in our Writing Room on Zoom. To join in, sign up!
But Draft Day is for anyone publishing a draft today.
All you need to do to participate is hit publish on a draft. It can be from your drafts folder on Medium (https://medium.com/me/stories/drafts) or just an idea that\'s been sitting in the drafts folder of your mind. Today, we celebrate getting those drafts out in the world, so give your story the topic "Draft Day 2025" when you publish it, and we\'ll keep an eye out for it.
· Draft Day 2025 Schedule
· LIVE BLOG
Draft Day 2025 Schedule
9 a.m. ET: Welcome to Draft Day!
9:30 a.m. ET: ✍️ Writing block 1
11 a.m. ET: Prompt talk! We\'ll talk through some great writing prompts to help get you writing if you\'re stuck
11:15 a.m. ET: ✍️ Writing block 2
1 p.m. ET: How to find a publication (prerecorded video)
1:30 p.m. ET: ✍️ Writing block 3
3 p.m. ET: Pub talk! We\'ll be chatting with editors from our Draft Day sponsors
3:30 p.m. ET: ✍️ Writing block 4
5 p.m. ET: The home STRETCH
5:15 p.m. ET: ✍️ Writing block 5
6:45 p.m. ET: Draft Day retrospective: A look back at the day
7 p.m. ET: That\'s a wrap!
LIVE BLOG
7 p.m. ET:
That\'s a wrap, people! Well, at least on the live Zoom Writing Room portion of Draft Day 2025. Please keep posting, and adding the "Draft Day 2025" tag to your stories. We had over 350 people join us over the course of the day to convert over 500 drafts into published posts, and readers across the globe connected with new stories that changed their view of the world. We were thrilled to do it all with you and our community of publications—see you again next time!
5 p.m. ET:
Nearly 350 stories with the topic "Draft Day 2025." If you published a post for Draft Day, double check to make sure you included the topic!',
            'category_id' => 1,
            'user_id' => 1,
            'published_at' => '2025-05-17 16:59:00',
            'created_at' => '2025-05-17 22:59:22',
            'updated_at' => '2025-05-17 22:59:22',
        ]);

        Post::create([
            'title' => '🏆 AIAIAI Takes the Crown: How We Won the Gorilla Logic Weekend Hackathon',
            'slug' => 'aiaiai-takes-the-crown-how-we-won-the-gorilla-logic-weekend-hackathon',
            'content' => 'Posted by: The AIAIAI Team | May 18, 2025
What happens when you mix five creative minds, an overdose of caffeine, and 48 hours of pure adrenaline? You get Team AIAIAI—this year\'s champions of the Gorilla Logic Weekend Hackathon.
🌟 The Dream Team
Let\'s introduce the masterminds behind the magic:
        •       Sebastian Hidalgo – Product visionary and pitch king. Kept us aligned and inspired, even at 3 AM.
        •       Steven Perez – Full-stack wizard with a knack for making even the most complex backend tasks look like child\'s play.
        •       Valery Mendez – Our UX whisperer. She turned user flows into user wows.
        •       Jeff Perez – Frontend genius and code ninja, breathing life into Valery\'s designs with React sorcery.
        •       Juan Diego Carballo – AI tamer and data wrangler. If it was smart, it was Juan\'s doing.
Together, we weren\'t just a team—we were a tech-powered think tank running on innovation and empanadas.
💡 The Winning Idea: "VoxMate"
Our project, VoxMate, was a smart assistant that blends generative AI with real-time team collaboration. Imagine a Slack bot meets ChatGPT but with the personality of your favorite coworker. It could summarize threads, generate meeting agendas, even crack a dad joke or two when things got tense. Judges were wowed by its real-world potential and seamless UX.
🛠️ The Grind
The weekend was a blur of Figma files, Git commits, and lots of sticky notes. We hit technical snags, power naps on bean bags, and a brief crisis over pizza toppings. But every challenge brought us closer—and somehow, more focused.
We divided and conquered:
        •       Juan and Steven tackled the AI models and backend services.
        •       Valery and Jeff teamed up to create a buttery-smooth UI.
        •       Sebastian tied it all together with product strategy and a pitch that gave TED Talks a run for their money.
🏁 The Pitch That Sealed It
Final presentations were intense. But when it was our turn, we owned the stage. Sebastian opened with a story, Valery demoed like a pro, and the live AI features worked like a charm (phew!).
When the results were announced, and "AIAIAI" echoed through the Zoom call, it was pure joy—virtual high-fives, confetti filters, and maybe a few happy tears.
💬 Final Thoughts
We came for the fun, we left with a trophy—and a stronger bond as a team. Huge shoutout to the Gorilla Logic organizers for making this hackathon unforgettable.
To all future competitors: we set the bar. But we\'re also cheering you on. After all, tech is better when we build it together.
Stay innovative, stay weird. We are AIAIAI. 🤖💥',
            'category_id' => 1,
            'user_id' => 2,
            'published_at' => '2025-05-15 18:06:00',
            'created_at' => '2025-05-18 00:06:19',
            'updated_at' => '2025-05-18 00:48:35',
        ]);

        Post::create([
            'title' => 'What Would Algernon Think of Neuralink?',
            'slug' => 'what-would-algernon-think-of-neuralink',
            'content' => 'Last week, I came across the story of Brad Smith, the ALS patient who was implanted with a Neuralink chip and used it to communicate by typing words on his laptop through a brain-computer interface (BCI).
Well, my Internet search tells me that this isn\'t the first time something like this has been made — although Neuralink is smaller and less invasive than previous prototypes.
What makes Neuralink different from its predecessors is the fact that this device is being tested for the mass market, rather than just for clinical applications, and with the explicit goal to "boost" our brain power, with promises like improved memory and accelerated learning.
Of course, such an ambitious project comes with risks: what if something goes wrong? What are the long-term effects of BCIs? What about maintenance, obsolescence, and malfunctions?
I am not in a position to answer these questions. I don\'t even know if Neuralink is ever going to work, and I won\'t pretend to understand the science behind it.
But reading about that man led me to some considerations I\'d like to share.
If that were my man…',
            'category_id' => 2,
            'user_id' => 2,
            'published_at' => '2025-05-12 18:51:00',
            'created_at' => '2025-05-18 00:53:03',
            'updated_at' => '2025-05-18 00:53:03',
        ]);
    }
}

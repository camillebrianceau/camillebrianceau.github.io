# ARAMIS Website

This website is developed using HTML, CSS, and JavaScript. It is designed to showcase the 
research activities, software tools, and team contributions of ARAMIS. The structure of 
the website is organized as follows:

```
index.html
├── research/
│   ├── topics.html
│   ├── collaborations.html
│   └── publications.html
├── softwares/
│   ├── leaspy.html
│   ├── deformetrica.html
│   └── clinica.html
└── the_team/
    ├── people.html
    └── join_us.html
```

## Contributing

This website is designed to be collaborative. We encourage every team member to submit a 
Pull Request (PR) if they notice any issues or wish to propose a new feature or improvement. 
For those unfamiliar with the process, refer to [GitHub's guide on creating a pull request](https://docs.github.com/en/github/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request)
for detailed instructions. Several additions are possible on the site. 
Please adhere to the following guidelines to maintain consistency in style:

### 1 - Adding Publications

Each team member is responsible for adding their own publications if they want them to be 
displayed on the site. To add a publication, you can follow this template:

```html
<!-- Example HTML code for a publication -->
<div class="publication">
    <h4>Title of the Publication</h4>
    <p>Author Name(s), Published in Journal Name, Year.</p>
    <a href="link_to_publication">Read more</a>
</div>
```

### 2 - Adding a Team Member

To add a team member, update the `the_team/people.html`.
Add the photo in `images/people/carre/new_member.jpg` (ensure it’s in a square format).

```html
<!-- Example HTML code for a team member -->
<div class="team-member">
    <img src="path_to_photo.jpg" alt="Name">
    <h4>Name</h4>
    <p>Role and short bio.</p>
</div>
```

### 3 - Adding a Collaboration

To feature a collaboration, use the following template:

```html
<!-- Example HTML code for a collaboration -->
<div class="collaboration">
    <h3>Collaboration Title</h3>
    <p>Details about the collaboration and participating organizations.</p>
</div>
```

### 4 - Adding a Publication

To add a publication, use the following template:

```html
<!-- Example HTML code for a publication -->
<div class="publication">
    <h4>Publication Title</h4>
    <p>Authors, Journal, and Publication Date. Include a link to the publication if available.</p>
</div>
```




Credits:
```
Template: 
	TXT by HTML5 UP
	html5up.net | @ajlkn
	CCA 3.0 license (html5up.net/license)

Demo Images:
	Unsplash (unsplash.com)

Icons:
	Font Awesome (fontawesome.io)

Other:
	jQuery (jquery.com)
	Responsive Tools (github.com/ajlkn/responsive-tools)
```
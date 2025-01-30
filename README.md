# ARAMIS Website

This website is developed using HTML, CSS, and JavaScript. It is designed to showcase the 
research activities, software tools, and team contributions of ARAMIS. The structure of 
the website is organized as follows:

```
index.html
├── publications/
│   ├── latest-publications.html
│   └── overview.html
├── job_offers.html
├── people.html
├── research_topics.html
└── software.html
```

## Contributing

This website is designed to be collaborative. We encourage every team member to submit a 
Pull Request (PR) if they notice any issues or wish to propose a new feature or improvement. 
For those unfamiliar with the process, refer to [GitHub's guide on creating a pull request](https://docs.github.com/en/github/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request)
for detailed instructions. Several additions are possible on the site. 
Please adhere to the following guidelines to maintain consistency in style:


### 1 - Adding a Team Member

To add a team member, update the `the_team/people.html`.
Add the photo in `images/people/carre/new_member.jpg` (ensure it’s in a square format).

```html
<!-- Example HTML code for a team member -->
<div class="tmm_member people_border">
  <div class="tmm_photo peopleimg tmm_pic_phd-students_12" style="background: url(../images/people/carre/unknown.png);"></div>
  <div class="tmm_textblock">
    <div class="tmm_names">
      <span class="tmm_fname">Léo</span> 
      <span class="tmm_lname">Guillon</span>
    </div>
    <div class="tmm_scblock">
      <a target="_blank" class="tmm_sociallink" href="https://fr.linkedin.com/">
	<img alt="" src="../plugins/team-members/inc/img/links/linkedin.png"/>
      </a>
      <a class="tmm_sociallink" href="mailto:hugues.roy@icm-institute.org">
	<img alt="" src="../plugins/team-members/inc/img/links/email.png"/>
      </a>
      <a target="_blank" class="tmm_sociallink" href="https://www.researchgate.net/">
	<img alt="" src="../plugins/team-members/inc/img/links/researchgate.png"/>
      </a>
      <a target="_blank" class="tmm_sociallink" href="https://scholar.google.com/" title="Google Scholar">
	<img alt="Google Scholar" src="../plugins/team-members/inc/img/links/customlink.png"/>
      </a>
      <a target="_blank" class="tmm_sociallink" href="aramis">
	<img alt="" src="../plugins/team-members/inc/img/links/website.png"/>
      </a>
      <a target="_blank" class="tmm_sociallink" href="https://twitter.com/"> <!-- a bannir-->
	<img alt="" src="../plugins/team-members/inc/img/links/twitter.png"/>
      </a>
    </div>
  </div>
</div>
```

### 2 - Adding a Publication 

To add a publication, use the following template:

#### 1 - In `latest_publications.html`

```html
<!-- Example HTML code for a publication -->
<div class="col-md-12">
  <a class="publi-link" href="link to my last publication on HAL">
    <h3>My last publication</h3>
  </a>
  <p style="font-size:13px;">
    By John Doe, John Doe, Johne Doe
  </p>
  <p>
    <span class="keyword-tag">keyword 1</span>
    <span class="keyword-tag">keyword 2</span>
    <span class="keyword-tag">keyword 3</span>
  </p>
  <hr>
</div>

```
#### 2 - In `overview.html`

```html
<!-- Example HTML code for a publication -->
<li>
  Koval I, Schiratti JB, Routier A, Bacci M, Colliot M, Allassonnière S, Durrleman S.
  <em>Spatiotemporal propagation of the cortical atrophy: population and individual patterns</em>. In 
  <strong><em><u>Frontiers in Neurology</u></em></strong> 9, 2018. 
  <a class="pdf-color" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5945895/" target="_blank" rel="noopener noreferrer">
    PDF<img decoding="async" loading="lazy" src="../../images/icons/pdf/pdf_logo.png" alt="PDF" width="20" height="17"/>
  </a>
</li>
```

### 3 - Adding a Job Offer

To add a publication, use the following template and add it in the correct section in `job_offers.html`

```html
<!-- Example HTML code for a publication -->
<br>
  <li>
    <a href="job_offers/2025/01/JobOffer_ARAMIS.pdf">Name of the job offer</a> <br>
    <span style="font-weight: bold;">Duration:</span> x months &#8211; 
    <span style="font-weight: bold;">Starting date:</span>  01/01/2025 &#8211; 
    <span style="font-weight: bold;">Contact:</span> name.lastname@icm-instituite.org
  </li>
```


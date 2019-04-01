# House MD
---
## Midterm Project Website
### Austin Peng
### 3/13/19

  
This website is about House MD, an old show that I recently started binging.

## IA Requirements
---

### Ontology

* Each character has a name.

* Each character has a picture.

* Each character has a job position.

* Each character has an early life paragraph.

* Each character has a academic program paragraph.

* Each character has a fun facts paragraph.

### Taxonomy

For all 3 characters:
   * Character Name
   * Character Photo
   * Character Job Position
   * Early Life
   * Education
   * Interests


### Choreography

This will be a four-page website.

The home or index page is used for an introduction to the topic.

The other three pages are character information pages containing the ontology and taxonomy mentioned above.


## Design Requirements
---

### Z-Pattern

Introduces information on the topic as it's primary goal. In order, we can see the website topic title (1st quadrant), the navigation bar to other pages (2nd quadrant), light information on the topic (3rd quadrant) and a read more button which is in the 4th quadrant. 

### F-Pattern


The character pages are designed with F-Pattern in mind. Each page has a title followed by three sections with the same repeating elements. Each section has a title, a relevant picture, and two relevant paragraphs listed in order of importance or "eye-catching" ability from left to right. The title and picture of each section catch the eye first and the reader can read more information if they want to by continuing right.

Each page ends with a sign up for our newsletter. It is at the bottom because it is a secondary goal, after the information.

### C.R.A.P

##### Contrast 
I kept the theme as black and white. In the character pages, section headers are seperated from content using background highlight and h3 tags.

##### Repitition
Content layout between all character pages are the same. The nav bar is constant for all pages. Colors and styles throughout the website are the same. 

##### Alignment
Content paragraphs are lined up. All text and images in the content sections are all equally spaced and avoid the edges of the browser window.

##### Proximity
Character sections are margined from each other so that relevant information is close together.


### Fonts

I picked these fonts because they are both similar to the typeface used in the logo of the show. Different fonts for headers and paragraphs also provides contrast between the two.

I also underlined the current page in the nav bar w/ a black line b/c it matches the logo.


### CSS Architecture Structure

Included normalize.css.

I used SMACSS to organize my css files and used CSS factoring where I could.
Sections used from SMACSS format include Layout, Base, and Module.



### SSS Script And Other Issues

May not be significant but the transitions between pictures was too quick for me so I increased the delay.

The images are too big so you need to scroll down. A solution to this is just to set one picture as a background or find a way to overlay the text and buttons over the SSS. 

Also the images I found for the character pages are similar sizes but changing the viewport can stretch a few of them weirdly and I wasn't able to find a way around that.



## Technical Requirements
---
- PHP Factors out common-code.
- All HTML CSS validates (aside from php include "issues") and PHP works. 


## Sources
---
[Sources for Character Info](https://house.fandom.com/wiki/House_Wiki)
[Website Homepage Inspiration](http://csc174.org/assignment05/hongkong/index.php)
[Wiki for Homepage Info](https://en.wikipedia.org/wiki/House_(TV_series))
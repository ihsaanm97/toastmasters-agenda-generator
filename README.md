# TOASMTASTERS AGENDA GENERATOR
A simple, fast and flexible agenda generator for Toastmasters clubs. This tool is hosted on [TMTC Agenda Generator](https://tmtc-agenda-generator.000webhostapp.com/). Currently, this tool supports 3 clubs of District 98.

### Technology
- HTML5
- CSS3
- PHP3

### Background
- This project took birth when I served as the VP Education in TCS Maitree Toastmasters Club (Club #00616631) back in July 2020. I realized the need to figure out faster ways to create the agenda. The agenda is an important document which the VPE has to create and publish every week. And thus the time spent in fetching the data from a site like [Easy-Speak](https://easy-speak.org/login.php) (where we used to schedule our speeches and roles), entering them on a MS Word template and then formatting them manually was enormous. And this was to be done every week.
- Currently this site is customized for 3 different clubs and I have been updating them manually every cycle. Each clubs have their own format and hence the customization takes quite a while.

### Approach
I have created a 2 page system where:
- Page 1 is a simple form that accepts the input values from VPE.
- Page 2 is a HTML page where the data from page 1 is 'POSTED' and formatted. It then invokes the *window.print()* method to save the webpage as a PDF.

### Challenges
- I am using a free hositng service [000Webhost](https://in.000webhost.com/) to host my site. This has a large downtime and hence you'd find it to be down often.
- A simple solution to select date using datepicker. Need the date to be in the format given in the sample agendas.

### What's Next?
- Connecting a database table to store the ExCom data.
- A dedicated login for each club.
- Robustness to add/delete fields for easy customization.

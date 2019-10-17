# IT Leadership
## CTO Crash-Course for non-CTOs

Campbell Vertesi

(ohthehugemanatee)


## What's this about?

Doing cool shit that actually moves the needle for your business.


## What's this about?

![Dumb cat](img/dumbcat.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(credit: giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* very often when I see new tech leaders, they're acting like this cat
* Working very hard, but chasing symptoms rather than problems
* Some of them are also literally just tapping on boxes, but that's not what I'm talking about here.


## What's this about?

![Clever cat](img/cat-eats-toy.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(credit: pinterest)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes: 
* I'm talking about being this cat, who is not only eating a toy, she's swallowing it seemingly all in one go. 
* Concretely what will help you be this cat?
* Awareness of traps for tech leaders
* Setting appropriate goals 
* avoiding the wrong decisions
* Building a Digitalization roadmap


## Who am I?

![OhTheHugeManatee.org](img/oh_the_huge_manatee.png)<!-- .element style="border:none; background:none; box-shadow:none" -->

<br />ohthehugemanatee.org
<br />campbell.vertesi.com
<br />campbell.vertesi@microsoft.com <i class="fab fa-microsoft"></i>


## What do I do?
## <i class="fab fa-microsoft"></i>

![BMW](img/bmw.png)<!-- .element height="200px" width="200px" style="border:none; background:none; box-shadow:none" -->
![Lufthansa](img/lufthansa.png)<!-- .element height="200px" width="200px" style="border:none; background:none; box-shadow:none" -->
![Walmart](img/walmart-logo.png)<!-- .element height="200px" width="200px" style="border:none; background:none; box-shadow:none" -->
![Volkswagen](img/vw.png)<!-- .element height="100px" width="100px" style="border:none; background:none; box-shadow:none; padding:50px;" -->
![Bank of America](img/bofa.png)<!-- .element height="100px" style="border:none; background:none; box-shadow:none; padding:50px;" -->
![Heineken](img/heineken-logo.png)<!-- .element max-height="100px" max-width="200px" style="border:none; background:none; box-shadow:none; padding:50px;" -->
![HSBC](img/hsbc-logo.png)<!-- .element height="100px" width="100px" style="border:none; background:none; box-shadow:none; padding:50px;" -->

Notes:
* Principal Software Engineer Manager in Commercial Software Engineering - ignore titles!
* Help MS's biggest customers make smart technology decisions and implementations on the cutting edge
  * This isn't all of them, this is just the first few logos I grabbed. It was a PITA to put more on the slide, so this is the sampling you get.
* IoT, AI, Virtual Reality, etc - my specialty: cloud infrastructure
* All cases here anonymized, because the whole point of this is peoples' stupid decisions. Yes, even enormous companies make stupid decisions.
* Since they are anonymous, I will share the literal exact plans in use by these companies. I figure detailed examples are more valuable than fancy looking names.


## This talk

* The pitfalls
* The goal
* The plan

Notes:
* Your goal here is to make decisions with a very long sight. Planning for 2 or 3 years into the future is no joke. 
* First we'll talk about the problems with long sight. 


## For example...

"The customer has no freaking idea what they need." 

-- Every consultant, ever

Notes:
* Who here has been a consultant?



## The pitfalls

![Sauron eye](img/sauron-eye.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(credit: Lord of the Rings)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* Your job is to look far into the distance and make plans. So what are the traps you need to avoid?
* Stakes are high, technology is cool, being careful gets you a pile of hacks ,you have the wrong advisors, it's all expensive, time is continuous, tech is not a panacea, and the most important changes are invisible.


#### The pitfalls
## Stakes are high

Notes:
* You're making a plan for several years - this is a lot of money at stake!
* Hands up anyone here who's had to advise a company to stop work after a lot of sunk cost? It's a terrible conversation
* Companies that persist in a bad technical direction put their entire existence at risk. 
* One of my consultants tells the story of a French "unicorn" company he helped, with literal tons of money.  


#### The pitfalls
## Stakes are high

![Burning money](img/burning-money.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Jp Valery on Unsplash)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
The CTO's plans hinged on generalizing everything, all the time.
  * Every step of the way they would take time to abstract and write the code necessary to reuse components everywhere else.
  * We advised them to stop the approach and take a direct route to market - we call it "time to first money". For tech people that counts as funny stuff.
  * The CTO wouldn't listen, and after we disengaged they continued on that path with another partner.
  * Ultimately they never got to their functional goal, and the unicorn was bought by a competitor for a fraction of their original value.


#### The pitfalls
## Technology is cool!

![Robot](img/humanoid-robot.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Alex Knight on Unsplash)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* We all understand the risk: you make a technology bet, spend the time and money on rearchitecting around it... and two years later, you're stuck in a dead end.
* There's a technology treadmill here, watch out!
* What were cool techs last year, that turned out to be dead ends?
* What are some of the cool techs out there today?
  * These are all red flags for you. It doesn't mean "never implement", it means to be very clear about the desired business value
* Unfortunately your best technical advisors are the most likely to be captured by technology trends. This is human! 


#### The pitfalls
## Being careful == pile of hacks

<video loop data-autoplay src="media/rube-goldberg.mp4" type="video/mp4" ></video>
*(Credit: Giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* On the other side, if you're too careful and slow to adopt, you're leaving competitive advantage on the table
* This tends to lead to a bunch of home-maintained tricks to try and imitate the benfits you are missing from your old tech stack.
* For example, you could use modern containerization techniques, or you could write really aggressive auto-scaling and routing scripts.


#### The Pitfalls
## You have the wrong advisors

Notes:
* You are trying to make good business decisions about technology. On the one hand you have technology experts who know nothing about business, and on the other you have business experts with no idea about technology. 
* The best technical advisors are furthest away from the business reality, and vice versa.
* These are the right people to have in the room, but none of them are able to form the complete picture. That's your job. You have to be the bridge. 


#### The Pitfalls
## Continuous time

"A four year plan to get where you want to be today, is a stupid plan"

-- Somebody, probably.

Notes:
* One of the bigest mistakes people make, is to make a long plan to transition to a specific technology that looks great right now. By the time you get there, you're already behind the times.
* The goal is to avoid spending time/money on specific technology until the last possible moment, with the closest information to the ground possible.


#### The Pitfalls
## Tech is not a panacea

![Windex](img/windex.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: My Big Fat Greek Wedding)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* Be clear on human vs technology problems
  * When we invented the telephone, it was going to revolutionize communication. We got 1-900 lines.


#### The Pitfalls
## Tech is not a panacea

![1-900 line](img/1900-ad.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Adobe)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->


#### The Pitfalls
## Tech is not a panacea

![Pulp magazine](img/pulp-magazine.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Detective World)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
  * When we invented the printing press, it was an amazing explosion of knowledge sharing... and we got pulp cowboy novels.
  * Technology by itself doesn't change human nature. We like the things we like, we do the things we do, and we'll happily use new gadgets to do it. So don't expect tech to solve your people problems.
* What can you improve?
  * You can improve velocity, cost, efficiency... but not WHAT you're doing
  * If your people fundamentally think of their domain wrong, tech won't help that. IT will just help them do the wrong things faster with less friction.
* Web project with Mozilla to build a community organization hub... turns out those communities didn't exist yet. What they really needed was marketing and community engagement.


#### The Pitfalls
## Invisible changes

![Ghost](img/ghost-pottery.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Paramount Pictures)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* Has everyone here seen the movie "Ghost"? The moral of the story is, sometimes the most important things are invisible.
* Some important changes are invisible by definition. Backend changes, re-architectures, cloud migrations. They're the Patrick Suaze of technical decisions. You really want them - oh WOW do you really want them. But no one else can see them.
* These kinds of changes provide enormous benefits for your company, but they mean going for a period of time without visible updates.
* This project is not about "implementing kubernetes", it's about "reducing our cloud spend while gaining scalability". That's something you can demonstrate. 
* You're not "sleeping with a ghost," you're "creating pottery with a unique four-handed technique".
* For example, who here uses Wunderlist?
  * When MS acquired it... the code on the inside was really hard to maintain. They had very strict separation of services in a granular microservice environment. Meaning that every little bit of that app had a different language, different environments, etc... and it stored the data in a single backend. 
  * Our team spent two years rewriting the entire guts of the application. The new internals use MS Exchange as a storage point, so it can integrate with the whole Office stack, be searchable, etc etc. That's awesome and sets the product up for a great future. But they're struggling to justify having a full staff for two years, with "nothing" to show.
* A lot of your biggest business value comes from internally-facing changes. You have to think about how you can expose some of that value - or the perception of that value - to your end users? Also vice-versa.
* SO: how do we get around these? With appropriate goal setting and roadmapping.



## The Goal

"Gooooooooooooooooooooooooooooooooal!!"
-- Bastian Schweinsteiger

Notes:
* You've heard this before. "start with the end in mind" etc
* What are some examples of goals that a CTO might make? (audience)


#### The Goal
## Real world top-level goals

* Implement kubernetes and microservices for all our processes.
* Move to a decoupled approach for our web properties.
* Smoothly transition to Office365 and Azure
* Use ML to predict customer product preferences

Notes:
* Audience poll: Which goal is the best one? Why?
* Trick question, they're all terrible. All real world goals that I've helped people out of.
* Why are these bad goals? Because they focus on the HOW. 
  * The HOW is the most granular level decision you make. 
  * Specific technology is the source of extremely rapid change. If you set one of these goals, by the time you reach it, your goal will be out of date. Remember the pitfalls!


#### The Goal
## Good goal setting

* Start from business needs
* Boolean or Quantified
* Technology agnostic

Notes:
* Start from your business needs.
  * Are there known pain points?
  * Take some different approaches to modeling the choke points in your business.
    * production line approach
    * independent business units approach
    * sales and customer lifecycle approach
  * Remember the gulf between technical and business people? Your tech people can understand business needs, but vice versa is harder. So help them think about their objectives in business terms.
  * Major EU bank - wanted kubernetes and flat deployment structure. But the critical business issues conversations wre all about the hard walls, how do we separate for security. This suggested the opposite technical approach: VMs.
* Boolean or quantified: the idea is to be able to say "yes we made improvements here" or "yes we achieved this".
  * Some objectives are by nature qualitative. That means you need an intermediate step to help quantify them. eg Employee Satisfaction.
  * This often involves many layers of questioning. "build a better travel system" "how will we know it's better?" "How will we know we're asking the right questions? etc.
* This is hard! This level of goal setting and strategy is actually why they pay you the big bucks. So take your time. 


#### The Goal
## Some better examples

* Break our dependence on Amazon
* Reduce code dependencies across teams
* Integrate corporate communications and structures with network infrastructure and capabilities
* Reduce complexity in product customization

Notes:
* Originals:
  * Implement kubernetes and microservices for all our processes.
  * Move to a decoupled approach for our web properties.
  * Smoothly transition to Office365 and Azure
  * Use ML to predict customer preferences


#### The Goal
## Goal-setting meeting

* Start from top priority business objectives.
* What tech problems impede us in reaching them?
* What are the smallest meaningful steps to get there?
* Craft "problem statements"

Notes:
* Practically, how this works is: you have a direction-setting session. I've run these for up to 5 days. That's a big investment from your top minds, but hopefully you're producing a plan that will last for 3 years. It's worth it!
  * You come in with some initial business objectives - interfacing with the C-suite is your job
  * Your technical leaders should help you puzzle this out. 
  * Not just management - try to get some eyes from the "ground floor", too


#### The Goal
## Problem statements

* "Running one round of simulation tests on a single automated driving feature takes a full day. This significantly slows our development velocity."

Notes:
* Some real-world example problem statements. Essentially your plan as a CTO is to decide on the top-level problems you want to address.


#### The Goal
## Problem statements

* "Manually mapping users onto permissions is complex and error prone. This puts the airline at unnecessary risk." 


#### The Goal
## Problem statements

* "Maintaining and validating security procedures across 140 separately maintained applications and environments is slow and error-prone. This exposes the bank to difficult-to-detect security risks."


#### The Goal
## Definition of Done
* Short
* Able to validate
* Avoid technical specifics

Notes:
* Each project team should come up with a concrete, non-technical "Definition of Done" for the very first version that would improve the problem situation.
* When you help them evaluate approaches, each approach is measured against the DoD.
* The DoD is not static! It's OK for it to evolve as you discover other requirements.
* Keep asking questions to simplify.


#### The Goal
## Evaluate options

* Don't stop at the first answer
* Update DoD as necessary
* Exercise second-order thinking
* Consider iterative elephant-eating

Notes:
* Often in comparing approaches, you will find the "Quick and Dirty" way can get you there in a week. But there is a "Right Way" that may bring other benefits. 
  * The Right Way probably has some other features that should enter into your DoD. Future-proofing, training, interoperability, etc.
* Note that sometimes you need to exercise second order thinking. 
  * ML project with the UK government looking for anomaly detection... turned into monitoring to build the dataset they need for anomaly detection.
* Since you are avoiding naming specific tools, you remain focused on the larger objective. You can delay the specific technology decision until the latest moment, when you have the most information.
* UK government tax forms search system. When we evaluated multiple approaches actually using a search engine was one of the worst options out there. The best was to use the pattern of searches and people's actual results as an ML dataset... and the "search" field is just predicting what document you want to find based on your text input.
* Sometimes a delay is all you need to get out of the mindset of "new hotness" and focus on what you really need.


#### The Goal
## Evaluate options

![Vomit comet](img/vomit.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
  * Major auto manufacturer wanted VR in the car, the vomit comet. What they actually needed was productivity app integrations.


#### The Goal
## Evaluate options

* Don't stop at the first answer
* Update DoD as necessary
* Exercise second-order thinking
* Consider iterative elephant-eating

Notes:
* Once you have a candidate list of (broad) technical approaches, you can start evaluating using traditional tools like SWOT analysis
* Eating the elephant in iterations


#### The Goal
## Real world DoD

* Simulation test environment up and running on company Azure subscription in EU-West region 
* Tests will be provisioned/run based on:
  * SUT version.  
  * Environment version. 
  * Configuration parameters. 
  * Concurrency level
* Automatically provisions infrastructure, installs dependencies, runs tests, and tears down infrastructure.
Notes:
* Defines the *first step* solution to a project.


#### The Goal
## Real world DoD

* Components (configuration, required binaries, tools) required to run the test are accessible through a public end point.
* Test logs, recordings, and results are stored in persistent storage until manually deleted.   
* Infrastructure logs are available in a logging/monitoring tool.         

Notes:
* There are lots of approaches that satisfy these requirements. Let's have a look:


#### The Goal
## Real world DoD

![Virtual Machines](img/virtual-machines.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: techgenix.com)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* Could be VMs running this application


#### The Goal
## Real world DoD

![Docker containers](img/docker-logo.png)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Docker)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
Could be Docker containers


#### The Goal
## Real world DoD

![Pacific Islanders](img/pacific-islanders.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Pexels.com)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
It could be that we send a letter by mail to a team of Pacific Islanders who hand craft the simulation using traditional methods with coconut shells, sand, crab legs, and cloud based supercomputer analysis.


#### The Goal
## Real world DoD
Notes:
* The point is, we don't need to care about HOW yet. We care about WHAT and WHY.
  * Maybe by the time we're ready, Pacific Islanders will be all the rage. I'm sure Amazon is working on a system to do this already. (Mechanical Turk) 
* Probably best will be to incrementally build from simplest to more complex, looking specifically for the benefits of each stage and evaluating technology at that time.



## Digitalization roadmap
* Direction setter
* Promise
* Indicator

Notes:
* All of this initial thinking goes into your organization's Digitalization Roadmap
* It is a direction-setter for the specific problems you will address
* It is a promise of specific metrics that you will improve
* It is an indicator of your first approaches.
* There are lots of templates out there, IMO all worthless
* Your DR has to match how *your* organization thinks about its' problems and the solutions to it.
* Use all the resources you've developed, and lay those problems out on a timeline.
* Ultimately you want a Digitalization Roadmap document that 
  * makes intuitive and business sense
  * Delivers concrete, measurable business value
  * achievable, future-proof
  * includes a concrete implementation plan


#### Digitalization roadmap
## Table of Contents

* What are the problem areas?
* What will we change to improve things, and how?
* How will improvement be measured?
* Who is doing it?
* What's the timeline?

Notes:
* I really looked for a DR document that I could share here. But they're all really individual and unique to the situation
* It's not that I don't use any boilerplate - I do! - but this is the extent of it. I have a starter document with these 5 questions. That's what your document needs to do. The rest is formatting.


#### Digitalization Roadmap
## Table of Contents

Notes: 
* Talk in terms of initiatives and first iteration.
  * Initiative is a commitment to improving the problem according to the given metrics.
  * First iteration leaves implementation totally open. Maybe you'll ditch it partway through, maybe iteration 3 will be the right one. But we all know that iteration 1 is just the first stab at it. 


#### Digitalization roadmap
## Writing style

* Never use a long word where a short one will do.
* If it is possible to cut a word out, always cut it out.
* Never use the passive where you can use the active.
* Never use a foreign phrase, a scientific word, or a jargon word if you can think of an everyday English equivalent.

  -- George Orwell

Notes:
* Should be written in *plain language*. Avoid jargon. This doesn't have to be rocket science!
* Your goal is maximum understandability and memorability. Try to be pithy!


#### Digitalization Roadmap
## What are the problem areas?
Notes:
* This one should be easy. You've defined your business problems already! 
* A clear and plain-english restatement of the business problems.
* This is mostly targeted at the technical people who will read the document. (the business people know it already)


#### Digitalization Roadmap
## What will we change?

Notes:
* This is also copy-pasta from your initiatives. 
  * This document is too easy. Copy-paste in a large font, double spaced, with a nice graphic. Make it look like you're working!
* This is actually the core of the document, the whole point of what you're trying to communicate.
* Again, phrase in terms of Initiatives and first Iterations of Improvement.
* Target audience is Business people, who should all be able to understand Tech in such general terms.
* This is likely the longest section


#### Digitalization Roadmap
## How will improvement be measured?

Notes:
* Let me tell you a story about Wunderlist - oh wait I already did. The moral of the story is, you have to constantly think about how you tell the value story for everything you commit resources to. That team made huge improvements in their project! But they left themselves in a tough position to explain that to people. 
* Trust is just making many small promises, and coming through on them. This is where you set up those promises.
* You're choosing the indicators by which you will be measured! This gives you unbelievable power to tip the scales in your favor. Use it.
* Responsible measurement choices:
  * Some measurement is always better than no measurement.
  * Always pick metrics in opposing pairs. Catch what happens if measurement 1 is *too* successful. EG measure reduced customer wait times, countered by service employee down time.
  * Be on the lookout: some important aspects of your business are probably very hard to measure directly. Address this in the document, and try a proxy measurement of 2 or 3 indirect measurements.
  * Be aware to pick both leading and trailing indicators. Make concrete predictions about which is which, and how they should behave.
* You are setting yourself up for an Emperor Palpatine moment. "Everything is proceeding as I have foreseen"


#### Digitalization Roadmap
## How will improvement be measured?

![Emperor Palpatine](img/palpatine.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: 20th Century Fox)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* If you can say that, and back it up with documentary evidence, you have succeeded
* Clearly The Emperor knew the value of good metrics


#### Digitalization Roadmap
## Who is doing it?

Notes: 
* Who is leading which project.
* For business readers, this is "who is responsible?"
* For technical readers, this is "who gets kudos?"
* This can be broken down any way that makes sense to your organization - by initiative, by iteration, whatever.
* Goal is to be explicit about who owns each area of improvement. 
  * The initiative owner should be constantly measured by how they are doing on their indicators.


#### Digitalization Roadmap
## What is the timeline?

Notes:
* You've set your goals, focus, and metrics so as long as you actually make an effort in those directions, you can claim success. So time out when those successes will come.
* Consider 
  * interdependent projects
  * relative business objective priorities


#### Digitalization Roadmap
## What is the timeline?

![Mix tape](img/mix-tape.jpg)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(Credit: Photo by Tobias Tullius on Unsplash)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* I think of it like I'm planning a "mix tape" - pick what successes will come, when. You don't want all the big hits up front! But you probably want a slam dunk right before the end of fiscal year - that's when you've gotta convince your listener to turn the tape over.
* Anticipate at least two iterations before any Initiative shows significant improvement. They're all snowballs that take some time to get going.
  * So book some early short term wins to cover ramp up time for bigger Initiatives. 
* Try to space out invisible projects with highly visible ones



## TL;DR

* Keep goals, projects, and DoDs non-technical
* Postpone technical tooling decisions as late as possible
* Include input from all levels of your org.
* Choose your measures carefully
* Make your track record into a curated mix tape


## Ask Me Anything

*I am not a lawyer, marketing professional, official spokesperson, or oracle.*


## Thank you!

Contact me!
<br /><i class="fab fa-twitter"></i> @campbellvertesi
<br /><i class="fab fa-mastodon"></i> @ohthehugemanatee@fosstodon.org
<br /><i class="far fa-envelope"></i> campbell.vertesi@microsoft.com

Slides: https://aka.ms/cvertesi-cto-decisionmaking


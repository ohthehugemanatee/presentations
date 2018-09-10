## Why this Open Source warrior joined
# <span style="color: #00ccff;"><i class="fab fa-microsoft"></i> Microsoft </span>
### (And what it's like working there)

Campbell Vertesi

<i class="fab fa-drupal"></i> ohthehugemanatee


# Who am I?

![OhTheHugeManatee.org](img/oh_the_huge_manatee.png)<!-- .element style="border:none; background:none; box-shadow:none" -->

<br />ohthehugemanatee.org
<br />campbell.vertesi.com


## What's this about?

* Why I joined
* What it's like
* Ask Me Anything

Notes: 
This talk is divided into three parts.
- Why did I join? I want to walk you through the thought process that made me think this was a good idea.
- What it's like. My impressions now that I've been there for 9 months. Did my predictions bear out?
- AMA. Open floor, happy to answer any questions, challenges, or accusations you have.



# Why I joined Microsoft


## A little bit of copypasta

https://aka.ms/whyCampbellJoined

![CopyPasta](img/copypasta.gif)<!-- .element style="border:none; background:none; box-shadow:none; margin-bottom:0px;" -->
*(credit: giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
This same information is presented in some more detail on my blog post at the time, you can see the short link here.


## I grew up when Microsoft was the evil empire

* Halloween documents! Anyone remember those?
* Spreading FUD - Fear, Uncertainty, Doubt
* Embrace, Extend, Extinguish
* SCO lawsuits
* We're a cancer!

Notes:
Halloween docs
* released by Eric Raymond starting in 1998
* Microsoft internal report on OSS and Linux in particular
* Acknowledged MS use of FUD against OSS
* MS funneling $86M to SCO
* Beginning of "Embrace, Extend, Extinguish", came up in antitrust
  * Embrace: Build something compatible with the standard
  * Extend: Add proprietary features not in the standard, creating problms for customers using the standard.
  * Extinguish: Proprietary Features become de facto standard, killing competitors
    Embrace: Development of software substantially compatible with a competing product, or implementing a public standard.
    Extend: Addition and promotion of features not supported by the competing product or part of the standard, creating interoperability problems for customers who try to use the 'simple' standard.
    Extinguish: When extensions become a de facto standard because of their dominant market share, they marginalize competitors that do not or cannot support the new extensions.


## It's not a tumor

![Not a tumor](img/not-a-tumor.gif)<!-- .element style="margin-bottom:0px;"-->
*(credit: giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
In 2014, Microsoft got a new CEO who completely changed the company's direction on open source. His policy, in a nutshell: it's not a tumor!


![Microsoft in sheep clothing](img/wolf-sheep-clothing.jpg)<!-- .element style="margin-bottom:0px;"-->
*<i class="fab fa-creative-commons"></i><i class="fab fa-creative-commons-by"></i> Drew Tarvin*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->
How I saw these moves.

Notes:
Since Satya took over, Microsoft made nice overtures towards open source. I, like all true believers, didn't trust them. I remembered those lessons. 
* Yes, Visual Studio is a great IDE
* Typescript - JS is barely usable without it. 
* Powerscript got open sourced, which boggles the mind.
* Joined the Linux Foundation
* Platinum with the Open Source Initiative
* Linux subsystem on Windows
But I knew - I _knew_ that this was just another round of Embrace, Extend, Extinguish.
* And then I met an MS guy at a PHP conference. And he wasn't wearing Kevlar


![Josh Holmes](img/josh-holmes.jpg)<!-- .element style="margin-bottom:0px;"-->
*(credit: joshholmes.com)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->

Notes:
* "What are you DOING here"?
* He gave me the back-story. The birth, the origin, and the reason Microsoft HAS to be in open source


## The birth of OSS at Microsoft

"The good news is, no one is making jokes about Microsoft anymore.

The bad news is, **they aren’t even making jokes about Microsoft anymore**."

Notes:
* In 2007, Josh visited major Silicon valley conferences to report on Microsoft's presence in that ecosystem.
* The report he delivered to CEO Steve Ballmer said this.
* Tech startups were all being built in Open Source. If they wanted to survive, they had to stop the bile.
* It started with being less aggressive against open source, but gradually it grew.


## Partner Catalyst Team (PCT)

<video data-autoplay src="media/josh-pct.mp4" type="video/mp4" ></video>

Notes:
This is kind of amazing


## PCT TL;DR

*70 engineers who solve startup problems with Open Source software, and contribute the results back.*

Notes:
* That's a pretty impressive thing for Microsoft to do. It's not just lip service, or throwing money at PR. It's actual contribution, full time, to projects that probably compete with their own software.
* It's focusing on the customer's needs, on solving their problem.
The idea that Microsoft would do this was a turning point for me in my understanding. I found that not only did I like the sound of this; it actually sounded better than my job at the time, in the Drupalverse.


## My analysis

* Use external data sources
* Ignore PR
* Make and test predictions
* Demonstrate that "Embrace, Extend, Extinguish" is a viable strategy for today.

Notes:
* I decided that I would do my own analysis, to decide if EEE was what I was really seeing.
* Here were my rules.
* The goal: to demonstrate that EEE is still in evidence today


## The C-Suite speaks

"Microsoft loves Linux" (Satya, 2016)

"We are all in on open source" (Satya, 2018)

"If that's how developers want it done, that's where Microsoft will go." (Mark Russinovich, Azure CTO)


## But actions speak louder...

* Hired new leadership from OSS communities 
* MS maintains a Linux AND a BSD distro
* Owns the Github repo with the most contributors (VSCode)
* Biggest code contributor to Docker
* Top 5 contributor to the Linux kernel (3.x)
* Founding member of the Open container project

Notes:
Hired:
* Wim Coekaerts from Oracle
* Jeff McAffer from Eclipse
* Jim Hugunin from NumPy
* K.Y. Srinivasan, top linux contributor
* Brendan Burns from k8s
* Gabe Monroy from Deis
* Anders Hejlsberg creator of C# and turbopascal
* Erich Gamma from Eclipse
* Ross Gardler from Apache
* Maggie Pint from moment.js


## And numbers speak loudest

![Year over year PnL by product line](img/microsoft-profits-by-product.png)<!-- .element style="margin-bottom:0px;"-->

Notes:
* Closed-source licensing is a dead end (no surprise)
* SaaS is better (Office365)
* PaaS is even better than better (Azure)


## Strategically speaking

* Flexibility and portability are at a premium
* Open source is more than marketing; it's a requirement
* Open culture is critical

Notes: THIS is a big part of why MS is embracing open source. 
* A cloud that only does Windows is a non-starter. So they contributed like crazy to the Linux kernel, to improve virtualization and containerization options. Now Azure runs more Linux that Windows, by a long shot. 
* They created a sort of WINE style layer for Windows that lets you run Linux applications.
* They released Powershell for Linux
* Everything cross-platform. Even office.
* As technology areas overlap more and more, the premium on collaborative open work models is getting higher.


## Through the grapevine

40 years of proprietary, hierarchical thinking doesn't change overnight.

Notes:
* Legal really struggled: reviewing every single line of OSS code at the beginning
* Managers losing sense of direction, authority
* Dev teams having a hard time integrating with strangers on the internet
* Repeated messaging from the top.


## My conclusion (at the time)

"**Embrace, extend, extinguish does not involve leadership challenges, or breaking down of hierarchies.** It does not involve **personal struggle** and **departmental reorganization**. The stories I heard evidenced an organization trying a **real paradigm shift**, for **tens of thousands of people around the world**.

It is not perfect, and it is not finished, but I believe that the transition is real."



# What it's like here

Notes:
This is the part where I update my analysis with some information from the inside.
I am not a spokesperson, I don't have visibility into the whole company. But I am in the middle one of Microsoft's newest departments. There's a lot to see.


## Predictions

* Windows importance and revenue would continue to decline
* More importance and revenue in PaaS and SaaS offerings
* More investment in compatibility, cross platform


## Windows importance

* Windows department dissolved(!)
* Consumer Windows revenue down 8%
* Announced Windows paid support plan

Notes:
* In March, Microsoft announced a reorganization where Windows would no longer have a department. It is split between hardware, and cloud.
* Satya has promised for years that Windows would be the integration point between the actual profit centers, and now the org structure represents that.
* Note the consumer Windows licenses are dropping FASTER than the consumer PC market.
* Microsoft announced Windows S, a cheaper version for integrations
* Paid support plan... sounds like the RedHat model to me


## PaaS and SaaS

This fiscal:
* Office 365 revenue up 42%
* Azure revenue up 91%
* Gaming revenue up 18%

Notes:
Now, which department would YOU invest in? The one that's dropping by 8%? Or would you perhaps dissolve the department into more profitable components?


## Compatibility, cross-platform

* Azure Kubernetes Service
* Azure Open Service Broker
* Golang: project Athens proxy, gophersource community growth effort
* Azure functions in Python, PHP, TypeScript, Bash
* Open source Azure services, pre-built containers 
* Another MS Linux distro (Azure Sphere)
* Open source quantum computing simulator and language
* GitHub acquisition

Notes:
* First class support is probably waiting for Azure functions 2.x, which is better at language support.
* Azure Service Fabric, Cognitive Services, Machine Learning, Stream Analytics, and Functions are all going open source


## My department

* Open source by default
* Sharing an explicit part
* Many many many many many great OSS projects and contributions

https://aka.ms/cse-oss-projects


## Re-orged!

* removed "sharing" from mission statement
* "we do not do evangelism"


"Contribution is just a part of being a good engineer."
![mind blown](img/mind-blown.gif)<!-- .element style="margin-bottom:0px;"-->
*(credit: giphy)*<!-- .element style="page-break-inside: avoid; display: block; font-size: 50%;" -->


"I am proud to be an Open Source developer at Microsoft."
<br />-- Me.



# Ask Me Anything

*I am not a lawyer, marketing professional, official spokesperson, or oracle.*



# Thank you!

How great was this session?
<br> https://rating-url-here.com

Slides: https://aka.ms/drupaleurope-why-I-joined-ms

Contact me!
<br /><i class="fab fa-twitter"></i> @campbellvertesi
<br /><i class="fab fa-mastodon"></i> @ohthehugemanatee@fosstodon.org
<br /><i class="far fa-envelope"></i> campbell.vertesi@microsoft.com

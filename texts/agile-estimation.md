## Agile estimation
### Nov 25, 2020


## Agenda

* Why estimate?
* Why story points? What do they tell us?  
* Making predictions
* Red flags
* Why are we doing this again?



## Why estimate? 

Notes:

* We estimate because we want the business to treat us well.
* Agile is a way of bringing the business and the developer needs together.
* One of the best ways I've seen this expressed is from Extreme Programming


## Developer/Business agreement
(according to [XP](htps://extremeprogramming.org/))

Notes:
* Go ahead and have a look at extremeprogramming.org for more detail here


### The Developer Bill of Rights

- You have the right to know what is needed, with clear declarations of priority.
- You have the right to produce quality work at all times.
- You have the right to ask for and receive help from peers, managers, and customers.
- You have the right to make and update your own estimates.
- You have the right to accept your responsibilities instead of having them assigned to you.


### Customer Bill of Rights

- You have the right to get the most possible value out of every programming week.
- You have the right to see progress in a running system, proven to work by passing repeatable tests that you specify.
- You can cancel at any time and be left with a useful working system reflecting investment to date.

Notes:
* These are important for us to know as a dev team, because these are our promises to the people who pay our salaries.
* I've re-ordered these from the original. You probably have an  idea of how we meet these particular obligations`


### Customer Bill of Rights

- You have the right to an overall plan, **to know what can be accomplished when and at what cost.**
- You have the right **to change your mind, to substitute functionality, and to change priorities** without paying exorbitant costs.
-  You have the right **to be informed of schedule changes, in time to choose** how to reduce the scope to restore the original date. 

Notes:
* These are the obligations that are connected to estimation.
* To know what can be accomplished when, and at what cost, in a way that is resilient to changes and substitutions in scope and knowledge, and which gives us maximum notice in advance when something needs to change.
* That's not easy!


### The challenge

![Cone of Uncertainty](img/cone_of_uncertainty.jpg)<!-- .element style="border:none; margin: 0; background:none; box-shadow:none" -->

Notes:
* The biggest problem is the Cone of Uncertainty
* There's a range for accuracy in any estimate, based on your knowledge. If I ask you how long it will take you to build me an app, you're just guessing. You don't know what I want!
* If we discuss for awhile and you understand better, you can give a better guess. Still not great
* The most accurate estimate you can give me, is by actually building the app. Then you know how long it takes.
* We want a system that takes into account the uncertainty of features that are in the future, and adjusts as we get closer to them.


### Hope vs. Management

> "Loss of hope is a major goal of Agile. We practice Agile in order to destroy hope before that hope can kill the project.

> "Agile is a way to provide an early and continuous dose of cold, hard reality as a replacement for hope."

  -- Robert "Uncle Bob" Martin

Notes:
* Uncle Bob is one of the authors of the Agile Manifesto, and I love this quote from him
* Agile is not about going fast. Here's another great Uncle Bob quote:


> Agile is about knowing, as early as possible, just how *screwed* we are. 

-- Robert "Uncle Bob" Martin

Notes:
* We want to know this so we can _manage_ the situation.
* This is what managers do! They manage!
* They do it by gathering data and then making the best decision they can based on that data. 
* Agile is about producing data, so that managers can make decisions to get the best possible outcome out of a project.



## Why story points?

Notes:

* OK, we accept that estimation is important.
* Critically, it is *only important to the business side*. It doesn't help developers get anything done. It just fulfills our obligation to the customer.
* So we accept that estimation is important. Now, why these weird story point things?


### Why not time?

The [Planning fallacy](https://en.wikipedia.org/wiki/Planning_fallacy)
> "A phenomenon in which predictions about how much time will be needed to complete a future task display an optimism bias and underestimate the time needed. This phenomenon sometimes occurs regardless of the individual's knowledge that past tasks of a similar nature have taken longer to complete than generally planned." 

-- Wikipedia

Notes:
  * 1979, Kahneman and Tversky. only 45% of people finish work in the time they estimated with a 99% confidence level, even with a reminder of past performance.
  * 30% of students completed their thesis in the amount of time they predicted.
  * On average, the BEST estimators only underestimate time by 30%. 
  * typical homeowner expects home improvement projects to cost about $19,000, whereas the true average cost is closer to $39,000. 
  * high-speed railroad projects on average overestimate passengers by 100 percent, and underestimate budget about 50 percent.


### Developer time

"Time spent if everything goes well."

Notes:
* Time for a task tends to be in "developer time": time spent if everything goes right. It excludes
  * external tasks like ticketing and communication
  * unexpected difficulty, dead ends, re-design (unknown unknowns)
  * technical issuesW
  * personal issues 


### Time estimation hacks

* Use a historical comparison
* Use third party estimates
* Three-point estimations
* Abstract "estimated time" from "real time"

Notes:
* But even if you get things pretty accurate, you fail on providing the maximum data for early decision making, in a way that's flexible to change.
* fundamentally it's a binary outcome: you either land right on the nose, or you're wrong. OF COURSE you're wrong more than you're right. And that screws up our projection.


### Abstract units

> POLICE: Mr. Heisenberg, do you know how fast you were driving?

> HEISENBERG: No officer, but I can tell you exactly where I am!

Notes:
* As long as we're abstracting from time... we could consider some other abstractions too. 
* It's very hard to say in advance the exact number of hours that a task will take. But what if we ask a different question, that has a strong correlation to time?
* How hard is it?
* Small, medium, large is a lot easier than a precise time.
* Before the first iteration: business can start making decisions about the tradeoff of business value and cost - and it's a cost number that at least *tries* to include risk, complexity, and time. ROI decisions are what managers do best.
* Also: developers stop feeling implicit time pressure, and hopefully can concentrate on quality. We go as fast as we go, the estimate is only about finding out just how fast that *is*. 


### Which units?

* T shirt sizes
* Cups of coffee
* Fibonacci sequence
* Buckets/Affinity mapping
* Story Points
* Anything else

Notes:
* Really it doesn't matter, as long as your units are consistent and linear


### Law of Large Numbers

> "The LLN... guarantees stable long-term results for the averages of some random events." 

-- Wikipedia

Notes:
* Linearity of points is important. Approximate Linearity + quantity = [Law of Large Numbers](https://en.wikipedia.org/wiki/Law_of_large_numbers). When taken in large numbers, the variance disappears and we get a predictable average. The bigger the sample size, and the more consistently linear the units, the more predictable the average.
  * This works even for random events: ths is why Casinos can make money on a roulette wheel, even though the wheel is very random.



## Making the prediction

Notes:
* So much for that. We use an abstracted measure for difficulty because we can calculate an average velocity from that, and that's all the business needs anyway.
* Let's have a look at our own sprint velocity.


### Simulation II velocity data

  ![Velocity data](img/velocity-data.png)<!-- .element style="border:none; margin: 0;background:none; box-shadow:none" -->

Notes:
* Explain the chart - Completed vs Completed/dday
* Number of ways to get a predicted velocity out of this. I use a mix.
  * Average of all sprints
  * Average of the last 3 sprints
  * Median


### Simulation II velocity

  ![velocity chart](img/velocity-chart.png)<!-- .element style="border:none; margin: 0;background:none; box-shadow:none" -->

192 SP Completed / 186 Estimated

Notes:
* note the outlier weeks. 
* Even with a small data set and some outliers, we have a predictable average! 62% of the time we get between 20-25 points through.
* Remember, this is about *average* accuracy. There's no guarantee about any individual sprint, only about sprints in *aggregate*
  * eg look at what a terrible estimate we had for sprint 9! Whoo!
  * BUT for the whole time period, the estimate is within 4%.
* 90% likelihood that our actual velocity will fall between .1014493 and .4464286 per developer day, median of .37


### Simulation II trends

  ![velocity trend](img/velocity-trend.png)<!-- .element style="border:none; margin: 0;background:none; box-shadow:none" -->

79 / 20 = About 4 weeks
79 / 0.37 = About 213 ddays

Notes:
* we have a pretty accurate idea of how fast we move, and we have rough estimates of all the remaining work we know about. It's just simple math to see when we'll finish all the stories.
* NB: AzDO trend lines include the average rate of backlog GROWTH. They're desgned for larger projects than ours.
* The easy math is: 79 points remaining, average speed of 20 points per week, 4 weeks.
  * Also note that this 79 points includes some duplicate stories. The Spike to try running in containers could remove anywhere from 5 to 41 points from the backlog.
* Actual project end is different from where the trend line predicts. It's when there are no more Stories where the Return on Investment makes them worth implementing, according to the PO. There's always stuff left over.
* Agile is not about going fast. It's about producing data about how fast we are going and moving at a predictable rate. The only failing iteration, is one that does not produce data.



## Red Flags

Abstracted estimation relies on:
* roughly linear, consistent relative estimates
* constantly updating as you get more information

Notes:
* After the first few iterations, the velocity stabilizes out. After that you have to keep an eye on your velocity trend line, which should be more or less horizontal.
* Growing velocity: usually means a change in how the the team is estimating complexity. Often this is a result of pressure to "get more points done" in a sprint. People grow their estimate to buy a bit of breathing room.
* Shrinking velocity: usually indicates problems around technical quality. The codebase is getting harder to change, which means you don't have enough testing (People are afraid that refactoring will break something they don't know about), or the parts are too tightly coupled. 



## So why are we doing this again?

We apply abstracted estimations to learn about our speed

* What can be accomplished when and how fast
* The estimate is resilient to changing priorities, scope, and development plan
* The estimate is available as far in advance as possible, given the cone of uncertainty

Notes:
* Remember, there are a lot of other points in that agreement! In order to fulfill all of our obligations to the customer, it takes more than just project practices like this. It takes TECHNICAL practices.
* This is where test driven development and SOLID principles, in particular, come into play. But we'll cover that another day!


## Thank you!

Slides:

<i class="fab fa-github"></i> github.com/ohthehugemanatee/presentations

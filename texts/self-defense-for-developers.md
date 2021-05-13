<!--![Microsoft logo](img/microsoft-white.png)<!-- .element style="height: 2.3em; border:none; margin: 0; background:none; box-shadow:none; align:top;" -->
# Self-defense against bad project management

Nov 25, 2020

<!-- .slide: style="text-align:left;" data-background-image="img/microsoft-white.png" data-background-position="top left" data-background-size="436px" -->

Notes:
- This is how I think about project management
- My background:
  - leading projects > 20yrs in lots of roles. PM, TL, Dev, Strategist, CTO
- NB: All of this is designed for project-based development, as opposed to product


## What we'll talk about

- What is bad project management?
- What is good project management?
- The only meetings you need
- Comparative agile methodologies
- Code Practices to keep you sane
- QnA



# What's bad project management?

- bad for developers
- bad for business owners

Notes:
- Seems pretty simple, right?
- Prjoect management is the meeting point between the business needs and the engineers who try to meet them.
- Imagine a badly managed project. What are some of the things you'll hear developers say?


## Bad for developers

Notes:
- What are some things you might hear from developers on a badly managed project?


- "Stop interrupting me! I just need time to focus."
- "it's end of project crunch time again"
- "if we could just start over from scratch..."
- "this will take WAY longer than you think"
- "WTF why did [colleague] do it like that? this is _painful_..."
- "What a waste of time"

Notes:

- so, what do developers really need? 
  - focus time
  - clear goals
  - minimal meeting overhead
  - maximum communication with each other
  - reliable, clear codebase that tells you the minute something breaks


## Bad for the business

Notes:

- What are things the business will say?


- When will it be done?
- Timeline slipped AGAIN? Why are you only telling me this now?
- But you said it would be done by now
- This is way too much money/time! How did you spend this?
- This isn't what I wanted!
- Does it work?

Notes:
- what does the business really need?
    - A plan with a timeline, up to the minute with latest knowledge. 
    - Dev team working effectively towards their goals - even when the goals change
    - Functionality that can be objectively validated as meeting their needs
    - A flexible, high quality codebase



# What's good project management

Developer/Business agreement
(according to [XP](htps://extremeprogramming.org/))

Notes:

- Have a look at extremeprogramming.org for more detail here


### The Developer Bill of Rights

- You have the right to know what is needed, with clear declarations of priority.
- You have the right to produce quality work at all times.
- You have the right to ask for and receive help from peers, managers, and customers.
- You have the right to make and update your own estimates.
- You have the right to accept your responsibilities instead of having them assigned to you.

Notes: 
- This is it. This is technically everything developers need from the business. Soak it in.
- Personally, I find looking at this list pretty relaxing. Yes, in that environment I can work.
- POs, pay attention: this is all you need to give your developers to have them work optimally. 


### Customer Bill of Rights
- You have the right to an overall plan, to know what can be accomplished when and at what cost.
- You have the right to get the most possible value out of every programming week.
- You have the right to see progress in a running system, proven to work by passing repeatable tests that you specify.
- You have the right to change your mind, to substitute functionality, and to change priorities without paying exorbitant costs.
- You have the right to be informed of schedule changes, in time to choose how to reduce the scope to restore the original date.
- You can cancel at any time and be left with a useful working system reflecting investment to date.

Notes:
- These are our promises to the people who pay our salaries. If we want the things on the developer side, this is how we pay for them.
- Do you notice what's not here?
    - scrum - anything. Grooming meetings, standups, whatever.
    - fixed timelines or price
    - QA testers


### Corollories
- Iterations
- Priorities
- Developer estimates
- Time is not a limiter on tasks; quality is.

Notes:

- These are things that implicitly come with those basic rights.
- Iterations ("You can cancel at any time and be left with a useful working system reflecting investment to date.")
- Priorities ("You have the right to know what is needed, with clear declarations of priority.")
- Developer estimates ("You have the right to make and update your own estimates.")
- Time is only important for prediction; not for measurement.



# the only meetings you need


## Goals

- make a list of independent pieces of functionality the business needs, with relative
  difficulty, sorted by customer priority
- choose which functionality pieces to build in this iteration
- make sure everyone knows what everyone else is working on, and can help as soon as its needed.
- a business representative who knows what the devs are working on can make sure it's valuable
  to the business, and answer questions


## Minimum meetings

- Write down / Update the functionality the business needs, in relative-weighted chunks, with priority.
- Decide what work to do before each iteration
- Understand/validate the working system after each iteration

Notes:

- Bear in mind that I'm talking about BARE minimum. I didn't include a meeting for
  that communication goal.


## Scrum meetings

| Scrum | Our MVP meetings |
| --- | --- |
| ?? | Write down / Update the functionality the business needs, in relative-weighted chunks, with priority |
| Sprint Planning | Decide what work to do before each iteration |
| Sprint Demo | Understand/validate the working system after each iteration |
| Sprint Retro | ?? |
| Daily Standup | Goal: everyone knows what everyone else is working on, and can help as soon as its needed. |


## Extreme Programming meetings

| XP | Our MVP meetings |
| --- | --- |
| Planning Games | Write down / Update the functionality the business needs, in relative-weighted chunks, with priority |
| Planning games | Decide what work to do before each iteration |
| Test/Release | Understand/validate the working system after each iteration |


## Kanban meetings

| Kanban | Our MVP meetings |
| --- | --- |
| Kickoff Backlog Creation | Write down the functionality the business needs |
| Daily Backlog Grooming | Update the functionality the business needs |
| Project Planning | Prioritize functionality |
| Daily Backlog Grooming | Add relative weights to the functionality the business needs |
| Daily Standup | Decide what work to do before each iteration |
| ?? | Show the working system after each iteration |
| Sprint Retro | ?? |



# Code practices to keep you sane


Notes:

- so far we've only talked abut the project practices that keep you sane,
  or at least their purpose
- we said "project management is where business meets tech", well so far that's
  just the busines side f it. We know how to know what to build, very efficiently
- Martin Fowler calls this "flaccid scrum" .It's a very efficient way to make a mess
- Sice everyone involved needs a flexible codebase that is easy to understand and
  validate... you can't just do that with meetings. You need technical practices, too.



# Modular code

Notes:

- there are a number of ways to achieve this, but basically you need independent
  units of code, each with a clear purpose. 
- Probably cleanest is a dependency injection system, or some other kind of inversion of control


# Automated testing

Notes:
- Unit, integration, end-to-end - they all have their place.
- The point is to vaildate for now and all future time that this functionality works.
- in the ideal case, every acceptance criteria in a ticket has a corresponding test.
- Documents what each piece does.

# Pair programming


# Frequent integration


# Common style and standards


# Refactor!

# making it even lighter-weight

Retros!


# Q and A


## Thank you!

Slides:

<i class="fab fa-github"></i> github.com/ohthehugemanatee/presentations


- Bear in mind that I'm talking about BARE minimum. I didn't include a meeting for
  that communication goal.

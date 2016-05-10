# Fuck Orbital

An officially unofficial CP3108B ("Orbital") project that meets the intermediate level of achievement,
completed in one day.

Goal statement: **Create a website where users can say 'fuck you' to Orbital anonymously.**

## Design Considerations

- Users will be authenticated via email. This will allow Fucks to be modified after they are posted
 via a token sent to their emails. This keeps user authentication frictionless while still
 maintaining acceptable levels of security and anonymity
- Names can be attached to Fucks, but kept optional to maintain anonymity
- An API will be provided to allow Fucks to be consumed by other web applications, at
 least the ones who wants to give a fuck.

## User workflow

- User enters Fuck, name (optional) and email.
- Email is sent to user to verify that they want to post the Fuck with a link with a confirmation token
  - Tokens expire after 30 min
- If the user wants to edit the message, a button on the Fuck will send them a new token that will allow them to do this

## Why?

Because Fuck Orbital

## But seriously, why?

Because I'm probably the only person to have ever failed a module before even taking
it. After talking to more than two dozen people and not even coming close to finding
a partner I realized I ran out of fucks to give. This 'project' was started as a way to
vent, but also because I wanted to see how much work I can do in a single day.

With apologies to Professor Krugman - while the project's goal is farcical,
the implementation does attempt to follow industry best practices and uses
the same tools professionals do. This project, then, is a serious implementation of a
ridiculous idea, which is of course the opposite of what is usual in Orbital.

## Timeline

Timings are rough. I didn't really use git properly, which is still better than my usual
 approach of not using git at all for personal projects.

- 9.30am: Initiate project, first commit
- 12pm: Creation, retrieval of fucks done
- 2.30pm: Editing of fucks and UI done
- 3.45pm: CRUD of fucks done and deployed - **milestone 1**
- 5pm: Token authentication done and deployed - **milestone 2**
- 8.30pm: Design update
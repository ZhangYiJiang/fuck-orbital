# Fuck Orbital

An CP3108B ("Orbital") project that meets the intermediate level of achievement,
complected in one day.

Goal statement: **Create a website where users can say 'fuck you' to Orbital anonymously.**

## Design Considerations

- Users will be authenticated via email. This will allow Fucks to be modified after they are posted
 via a token sent to their emails. This keeps user authentication lightweight
   and easy to use.
- Names can be attached to Fucks, but kept optional to maintain anonymity
- An API will be provided to allow Fucks to be consumed by other web applications

## User workflow

- User enters Fuck, name (optional) and email.
- Email is sent to user to verify that they want to post the Fuck with a link with a confirmation token
  - Tokens expire after 30 min
- If the user wants to edit the message, a button on the Fuck will send them a new token that will allow them to do this

## Why?

Because Fuck Orbital

# presentations
My presentation decks. Uses [reveal.js](https://github.com/hakimel/reveal.js) and fontawesome for a minimalist presentation style.

Each presentation is a markdown file in the `texts` directory. Media and images are in their own directories.

To view locally:

```
$ git clone --recurse-submodules git@github.com:ohthehugemanatee/presentations.git && cd presentations
$ php -S 127.0.0.1:8080
```

Access the directory listing at `http://localhost:8080/` and choose the markdown file of your choice.

To view a presentation online, visit `https://ohthehugemanatee.org/presentations/?p=texts/some-file.md#`, obviously replacing "some-file" with the name of your markdown file.

You can also specify a header/footer to include from the `includes` directory, by adding its basename into the `hf` parameter (eg "default"). Use an invalid name (like "none") for no header/footer.
---
id: 858179ff-8f96-43a0-b33f-fc82aee94553
blueprint: html
title: 'Audio Element: Embedding Sound Content'
teaser: 'The audio HTML element is used to embed sound content in web pages, allowing users to play audio files like music or podcasts with optional controls.'
reference_title:
  code: '<audio>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' HTML element is used to embed audio content within a webpage, allowing users to play audio files such as music, podcasts, or sound effects directly in their browsers. This element was introduced in HTML5 and provides a standard way to include audio without requiring additional plugins. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' tag supports various audio formats, including MP3, WAV, and OGG, although browser support for these formats may vary. It is commonly used with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<source>'
      -
        type: text
        text: ' element to specify multiple audio files in different formats, ensuring compatibility across different browsers.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' element is highly flexible, offering several attributes that control its behavior. The '
      -
        type: text
        marks:
          -
            type: code
        text: controls
      -
        type: text
        text: ' attribute adds default play, pause, and volume controls to the audio player, enhancing user interaction. The '
      -
        type: text
        marks:
          -
            type: code
        text: autoplay
      -
        type: text
        text: ' attribute allows the audio to start playing automatically when the page loads, although this is often restricted by modern browsers unless the audio is muted. The '
      -
        type: text
        marks:
          -
            type: code
        text: loop
      -
        type: text
        text: ' attribute enables continuous playback by restarting the audio once it ends, and the '
      -
        type: text
        marks:
          -
            type: code
        text: muted
      -
        type: text
        text: ' attribute starts the audio in a muted state. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <audio controls>
            <source src="audio-file.mp3" type="audio/mpeg">
            <source src="audio-file.ogg" type="audio/ogg">
            Your browser does not support the audio element.
          </audio>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
  -
    type: set
    attrs:
      id: m0h31hi2
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - autoplay
              - 'Automatically starts playing the audio as soon as it is ready.'
          -
            cells:
              - controls
              - 'Displays default audio controls such as play, pause, and volume.'
          -
            cells:
              - loop
              - 'Replays the audio automatically after it ends.'
          -
            cells:
              - muted
              - 'Mutes the audio by default.'
          -
            cells:
              - preload
              - 'Specifies if and how the audio should be loaded when the page loads.'
          -
            cells:
              - src
              - 'Specifies the URL of the audio file.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' element is a versatile and essential tool for embedding audio content on the web. It provides a seamless way to integrate sound into webpages, enhancing user experience through interactive audio playback. By leveraging its attributes, developers can customize audio behavior to fit their specific needs.'
link: 'https://html.spec.whatwg.org/multipage/media.html#the-audio-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: image_and_multimedia
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364876
seo_title: 'HTML Audio Element: Sound Content Explained'
seo_description: 'Learn about the audio HTML element for embedding sound files, enhancing web pages with music, speech, or effects.'
og_title: 'Understanding the HTML Audio Element'
og_description: 'Discover how the audio element in HTML is used to embed sound content, enabling playback of music, podcasts, and more with user-friendly controls.'
date: '2025-03-30'
---

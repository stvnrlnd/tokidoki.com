---
id: 76223c38-a57a-4b36-b49c-da8f60d96e5e
blueprint: html
title: 'Track Element: Timed Text Tracks for Media'
teaser: 'The track HTML element is used to specify timed text tracks for <audio> and <video> elements, such as subtitles, captions, descriptions, chapters, or metadata. It enhances accessibility and usability by providing additional text-based content that synchronizes with media playback. The track data is typically in WebVTT format.'
reference_title:
  code: '<track>'
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
        text: '<track>'
      -
        type: text
        text: ' HTML element is used to specify text tracks for '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' elements. It is a self-contained, void element that provides subtitles, captions, descriptions, chapters, or metadata to media content, enhancing accessibility and usability. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<track>'
      -
        type: text
        text: ' element is essential for making multimedia content more accessible to users who are deaf, hard of hearing, or speak different languages.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
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
        text: '<track>'
      -
        type: text
        text: ' element is used within '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' or '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ' elements and is not rendered directly. Instead, it provides additional information that can be displayed or used by media players. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<track>'
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
          <video controls>
            <source src="movie.mp4" type="video/mp4">
            <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
            <track src="subtitles_es.vtt" kind="subtitles" srclang="es" label="Spanish">
            Your browser does not support the video tag.
          </video>
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
        text: '<track>'
  -
    type: set
    attrs:
      id: m0ipuamj
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
              - src
              - 'Specifies the URL of the track file.'
          -
            cells:
              - kind
              - 'Specifies the kind of text track. Possible values include subtitles, captions, descriptions, chapters, and metadata.'
          -
            cells:
              - srclang
              - 'Specifies the language of the track text data, using a valid BCP 47 language tag (e.g., en for English).'
          -
            cells:
              - label
              - 'Provides a user-readable title for the track, which is displayed in the media player.'
          -
            cells:
              - default
              - 'A Boolean attribute that indicates the track should be enabled by default. Only one track per media element can have this attribute.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<track>'
              -
                type: text
                text: ' element significantly enhances accessibility by providing subtitles and captions, making video and audio content accessible to users who are deaf or hard of hearing.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Multilingual Support'
              -
                type: text
                text: ': By offering tracks in multiple languages, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<track>'
              -
                type: text
                text: ' element allows media content to reach a broader audience.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'User Experience'
              -
                type: text
                text: ': Text tracks like chapters and descriptions can improve the user experience by providing additional context or allowing users to navigate content more easily.'
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
        text: '<track>'
      -
        type: text
        text: ' element is a valuable tool for enhancing the accessibility and usability of multimedia content. It provides a way to include subtitles, captions, and other text tracks, making video and audio content more inclusive and user-friendly. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<track>'
      -
        type: text
        text: ' element, developers can ensure that their media content is accessible to a wider audience.'
link: 'https://html.spec.whatwg.org/multipage/media.html#the-track-element'
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
updated_at: 1743366821
seo_title: 'HTML Track Element: Timed Text Tracks Explained'
seo_description: 'Explore the track HTML element for adding subtitles, captions, and other text tracks to media elements, enhancing accessibility and user experience.'
og_title: 'Understanding the HTML Track Element'
og_description: 'Learn how the track element in HTML is used to provide timed text tracks for audio and video, including subtitles and captions, improving accessibility and media interaction.'
date: '2025-03-30'
---

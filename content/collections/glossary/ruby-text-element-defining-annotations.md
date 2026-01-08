---
id: 9ebe8d43-bc65-41ec-891d-ece030e9e67c
blueprint: html
title: 'RT Element: Ruby Text Component'
teaser: 'The rt HTML element is used to define the ruby text component of a ruby annotation, providing pronunciation, translation, or transliteration information for East Asian typography. It is typically used within a ruby element to enhance the readability of characters by offering additional context.'
reference_title:
  code: '<rt>'
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
        text: '<rt>'
      -
        type: text
        text: ' HTML element is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element to specify the ruby text, which provides pronunciation or annotation for the base text. Ruby annotations are commonly used in East Asian typography to help with the pronunciation or understanding of characters, particularly for language learners or readers unfamiliar with certain characters.'
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
        text: '<rt>'
      -
        type: text
        text: ' element is used to define the text that appears above or next to the base text in a ruby annotation. It is a child of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ruby>'
      -
        type: text
        text: ' element and is typically used in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rp>'
      -
        type: text
        text: ' element, which provides fallback parentheses for browsers that do not support ruby annotations. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rt>'
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
          <ruby>
            漢 <rp>(</rp><rt>かん</rt><rp>)</rp>
            字 <rp>(</rp><rt>じ</rt><rp>)</rp>
          </ruby>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In this example, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<rt>'
      -
        type: text
        text: ' elements provide the pronunciation "かん" (kan) and "じ" (ji) for the characters "漢" and "字," respectively.'
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
        text: '<rt>'
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
        text: '<rt>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0iiqg6h
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
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
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
                text: 'Semantic Meaning'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<rt>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is a ruby annotation, which helps both users and search engines understand the structure and purpose of the text.'
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
                text: ': Proper use of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<rt>'
              -
                type: text
                text: ' element enhances accessibility by providing additional information that can aid in understanding the pronunciation or meaning of text, especially for language learners or readers unfamiliar with certain characters.'
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
                text: 'Styling Flexibility'
              -
                type: text
                text: ': The appearance of ruby annotations can be customized using CSS to fit the design of the webpage, allowing for control over the positioning and styling of the annotations.'
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
        text: '<rt>'
      -
        type: text
        text: ' element is a key component of the ruby annotation system, providing the actual annotation text for the base characters. It enhances the readability and accessibility of text by offering pronunciation or meaning cues, making it easier for users to understand unfamiliar characters or words.'
link: 'https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-rt-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: ruby_annotations
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366860
seo_title: 'HTML RT Element: Ruby Text Explained'
seo_description: 'Explore the rt HTML element for defining ruby text, which offers pronunciation or translation for East Asian characters within ruby annotations.'
og_title: 'Understanding the HTML RT Element'
og_description: 'Learn how the rt element in HTML is used to provide ruby text annotations, enhancing the understanding of East Asian characters with pronunciation or translation guides.'
date: '2025-03-30'
---

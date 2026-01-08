---
id: ec614c6e-d744-4b11-b49c-16db1998113c
blueprint: html
title: 'Figcaption Element: Captioning Figures'
teaser: 'The figcaption HTML element is used to provide a caption or description for a figure element, offering context and explanation for the visual content.'
reference_title:
  code: '<figcaption>'
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
        text: '<figcaption>'
      -
        type: text
        text: ' HTML element is used to provide a caption or legend for the content of its parent '
      -
        type: text
        marks:
          -
            type: code
        text: '<figure>'
      -
        type: text
        text: ' element. It serves to describe or explain the contents of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<figure>'
      -
        type: text
        text: ', enhancing the accessibility and semantic meaning of the content. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<figcaption>'
      -
        type: text
        text: ' element is particularly useful for images, illustrations, diagrams, code snippets, videos, and other media that benefit from a descriptive caption.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Usage and Placement'
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
        text: '<figcaption>'
      -
        type: text
        text: ' element must be a child of a '
      -
        type: text
        marks:
          -
            type: code
        text: '<figure>'
      -
        type: text
        text: ' element and can be placed either as the first or last child of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<figure>'
      -
        type: text
        text: '. This flexibility allows developers to choose the most appropriate location for the caption based on design or readability considerations. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<figcaption>'
      -
        type: text
        text: ' element is part of the flow content category, meaning it can contain other HTML elements like text, links, and even headings. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<figcaption>'
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
          <figure>
            <img src="image.jpg" alt="A scenic view of the mountains.">
            <figcaption>A beautiful mountain landscape at sunrise.</figcaption>
          </figure>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Attributes
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
        text: '<figcaption>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0h6aqt6
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
        marks:
          -
            type: bold
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
                text: ': By providing a caption for the media content within a '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<figure>'
              -
                type: text
                text: ', the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<figcaption>'
              -
                type: text
                text: ' element enhances accessibility, offering a textual description that can be read by screen readers.'
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
                text: 'Semantic Clarity'
              -
                type: text
                text: ': The use of '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<figcaption>'
              -
                type: text
                text: ' within '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<figure>'
              -
                type: text
                text: ' elements gives clear semantic meaning to the content, indicating that the caption is directly related to and descriptive of the figure.'
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
                text: 'Design Flexibility'
              -
                type: text
                text: ': The ability to place '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<figcaption>'
              -
                type: text
                text: ' before or after the content allows for flexible design choices, depending on the layout and visual requirements of the webpage.'
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
        text: '<figcaption>'
      -
        type: text
        text: ' element is a valuable tool for providing descriptive captions for media content, improving both the semantic structure and accessibility of web pages. It works seamlessly with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<figure>'
      -
        type: text
        text: ' element to create well-defined and meaningful content sections.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-figcaption-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: figures_and_captions
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743365299
seo_title: 'HTML Figcaption Element: Captioning Figures Explained'
seo_description: 'Explore the figcaption HTML element for adding captions to figures, enhancing context and understanding.'
og_title: 'Understanding the HTML Figcaption Element'
og_description: 'Discover how the figcaption element in HTML is used to provide captions for figures, adding context and clarity to visual content.'
date: '2025-03-30'
---

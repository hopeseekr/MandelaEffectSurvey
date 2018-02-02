<section>
    <h3><?php echo $surveySection->title; ?></h3>
    <ol>
<?php
        foreach ($surveySection->questions as $qIdx => $question) {
?>
        <li>
            <div><?php echo $question->text; ?></div>
            <ol type="a">
<?php
                shuffle($question->options);
                foreach ($question->options as $oIdx => $option) {
?>
                <li>
                    <input type="radio" id="<?php echo "q$qIdx-$oIdx"; ?>" name="<?php echo "question[$qIdx]"; ?>" value="<?php echo $oIdx ?>"/>
                    <label for="<?php echo "q$qIdx-$oIdx"; ?>"><?php echo $option; ?></label>
                </li>
<?php
                }
?>
                <li>
                    <input type="radio" id="<?php ++$oIdx; echo "q$qIdx-{$oIdx}"; ?>" name="<?php echo "question[$qIdx]"; ?>" value="<?php echo $oIdx ?>"/>
                    <label for="<?php echo "q$qIdx-$oIdx"; ?>">Not sure / No clue</label>
                </li>
                <li>
                    <input type="radio" class="otherInput" id="<?php ++$oIdx; echo "q$qIdx-{$oIdx}"; ?>" name="<?php echo "question[$qIdx]"; ?>" value="<?php echo $oIdx ?>"/>
                    <label for="<?php echo "q$qIdx-$oIdx"; ?>">Other</label>
                </li>
            </ol>
        </li>
<?php
        }
?>
    </ol>
<?php
    if ($hasNextSection) {
?>
    <button class="btn btn-primary nextSection">Next...</button>
<?php
    } else {
?>
    <button class="btn btn-success">Submit survey</button>
<?php
    }
?>
</section>

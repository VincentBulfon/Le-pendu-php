<form action="index" method="post"> <!-- car c'est dans index que les décisions sont prisent -->
    <fieldset>
        <legend>
            Il te reste <?= $remainningTrials ?> essais pour sauver ta peau!
        </legend>
        <label for="triedLetter">
            Choisis ta lettre!
        </label>
        <select name="triedLetter" id="triedLetter">

            <?php foreach ($lettersArray as $letter => $status): ?>

                <?php if ($status): ?>

                    <option value="<?= $letter ?>">

                        <?= $letter ?>

                    </option>

                <?php endif; ?>

            <?php endforeach; ?>

        </select>
        <input type="submit" value="envoyer">
    </fieldset>
</form>
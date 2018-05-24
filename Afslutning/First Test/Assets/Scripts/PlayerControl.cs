using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerControl : MonoBehaviour {

    public float PlayerSpeed = 10.0f;
    public float JumpSpeed = 100.0f;
    public bool isGrounded = true;
    public float DistanceToGround = 1.4f;

	// Use this for initialization
	void Start () {
	}
	
	// Update is called once per frame
	void Update () {
        //Controls
        var horizontal = Input.GetAxis("Horizontal");

        if (Input.GetButtonDown("Jump") && isGrounded)
        {
            PlayerJump();
        }
        gameObject.GetComponent<Animator>().SetBool("isWalking", Input.GetButtonDown("Horizontal"));
        //Animations
        if (horizontal < -0.1f)
        {
            gameObject.GetComponent<SpriteRenderer>().flipX = false;
        }
        else if (horizontal > 0.1f)
        {
            gameObject.GetComponent<SpriteRenderer>().flipX = true;
        }


        //Physics
        gameObject.GetComponent<Rigidbody2D>().velocity = new Vector2(horizontal * PlayerSpeed, gameObject.GetComponent<Rigidbody2D>().velocity.y);

        //Rays
        RayCasting();

    }

    private void PlayerJump()
    {
        gameObject.GetComponent<Rigidbody2D>().AddForce(Vector2.up * JumpSpeed);
        //isGrounded = false;
    }

    private void RayCasting()
    {
        RaycastHit2D downray = Physics2D.Raycast(transform.position, Vector2.down);
        if (downray.collider != null)
        {
            if (downray.distance < DistanceToGround)
            {
                isGrounded = true;
            }
            else
            {
                isGrounded = false;
            }
        }
    }
    private void OnTriggerEnter2D(Collider2D _trig)
    {
        if (_trig.gameObject.tag.Equals("Coin"))
        {
            GameObject.FindGameObjectWithTag("EndZone").GetComponent<ScoreScript>().CoinScore(_trig.gameObject);
        }
        if (_trig.gameObject.tag.Equals("EndZone"))
        {
            GameObject.FindGameObjectWithTag("EndZone").GetComponent<ScoreScript>().EnterEnd();
        }
        if (_trig.gameObject.tag.Equals("CheckPoint"))
        {
            if (GameObject.FindGameObjectWithTag("Respawn"))
            {
                GameObject.FindGameObjectWithTag("Respawn").tag = "CheckPoint";
            }
            _trig.gameObject.tag = "Respawn";
        }
        if (_trig.gameObject.tag.Equals("KillZone"))
        {
            GameObject.FindGameObjectWithTag("EndZone").GetComponent<PlayerHealth>().Die();
        }
    }

}
